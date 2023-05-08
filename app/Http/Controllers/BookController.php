<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ReservedBook;
use App\Models\LentBook;
use App\Models\User;
use App\Models\Fine;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookController extends Controller
{
    public function index()
    {
      $books = Book::all();
      $reserved = ReservedBook::whereUserId(auth()->id())->get();
      $lent = LentBook::whereUserId(auth()->id())->get();


      return view('home', compact('books', 'reserved', 'lent'));
    }

    public function myBooks()
    {
      if(auth()->user()->subscription()->exists()) {
         $reserved = ReservedBook::whereUserId(auth()->id())->with('book')->get();
         $lent = LentBook::whereUserId(auth()->id())->with('book')->get();

         // change to carbon
         $date_reserved = ReservedBook::select(ReservedBook::raw("book_id, DATEDIFF(expire_date, CURDATE()) AS days"))->get();
         $date_lent = LentBook::select(LentBook::raw("book_id, DATEDIFF(expire_date, CURDATE()) AS days"))->get();

         $subscription = User::find(auth()->id())->subscription->subscriptionPlan;

         return view('mybooks', compact('reserved', 'lent', 'date_reserved', 'date_lent', 'subscription'));
      }

      else {
         return redirect()->route('home')->with('error', 'You need an active subscription. Please sign up.');
      }
    }

    public function cancel(Book $book) {
      ReservedBook::whereBookId($book->id)->whereUserId(auth()->id())->delete();
      return redirect()->route('mybooks')->with('success', 'Canceled the reservation for ' . $book->title);
    }

    public function return(string $id, Book $book) {
      $user = User::whereId($id)->first();
      $lent = LentBook::whereUserId($id)->whereBookId($book->id)->firstOrFail();

      // days diff
      $date = Carbon::parse($lent->expire_date);
      $now = Carbon::now();
      $diff = $date->diffInDays($now);
      $result = $now->gt($lent->expire_date);
      $fine = $diff * 0.70;
      $lent->delete();

      if($result) {
        Fine::create([
            'user_id' => $id,
            'book_id' => $book->id,
            'fine_amount' => $fine,
            'days_late' => $diff,
        ]);

        return redirect()->route('select.id', $id)->with('success', $book->title . ' has been returned. ' . $user->name . ' is ' . $diff . ' days to late, he will be  charged $' . $fine . ' dollars next payment.');
      }

      return redirect()->route('select.id', $id)->with('success', 'Successfully returned ' . $book->title);
    }

    public function show(Book $book)
    {
        $reserved = Book::find($book->id)->reservedbooks;
        $lent = Book::find($book->id)->lentbooks;

        // remove 4 later
        $books = Book::whereNotIn('id', [$book->id, 4])->limit(4)->inRandomOrder()->get();
        return view('book', compact('book', 'reserved', 'lent', 'books'));
    }

    public function reserved(Book $book)
    {
      if(ReservedBook::whereBookId($book->id)->exists()) {
         return redirect()->route('books', $book->id)->with('error', 'Book already added to your account.');
      }
      else {
         if(auth()->id() == 0) {
            return redirect()->route('login');
         }
         else {
            ReservedBook::create([
               'user_id' => auth()->id(),
               'book_id' => $book->id,
               'reserved_date' => now(),
               'expire_date' => now()->addDays(14)
            ]);

            return redirect()->route('books', $book->id)->with('success', 'Book added successfully to your account.');
         }
      }
    }

    // change to int
    public function lent(string $id, Book $book) {
         $lent = LentBook::whereUserId($id)->get();
         $subscription = User::find($id)->subscription->subscriptionPlan;

         if(count($lent) >= $subscription->max_books) {
            return redirect()->route('select.id', $id)->with('error', 'Maximum books for current subscription has been reached.');
         }
         else {
            ReservedBook::whereUserId($id)->whereBookId($book->id)->delete();

            LentBook::create([
               'user_id' => $id,
               'book_id' => $book->id,
               'lent_date' => now(),
               'expire_date' => now()->addDays(14)
            ]);

            return redirect()->route('select.id', $id);
         }
    }

    public function renew(Book $book) {
      LentBook::whereUserId(auth()->id())->whereBookId($book->id)->update(['expire_date' => now()->addDays(14)]);
      return redirect()->route('mybooks')->with('success', 'Book successfully renewed for 2 weeks!');
    }

   public function select(Request $request)
   {
      $id = User::whereEmail($request->email)->first();
      return redirect()->route('select.id', $id);
  }

  public function selectId(string $id)
  {
      $user = User::whereId($id)->first();
      $reserved = ReservedBook::whereUserId($id)->get();
      $lent = LentBook::whereUserId($id)->get();

      // change to carbon
      $date_reserved = ReservedBook::select(ReservedBook::raw("book_id, DATEDIFF(expire_date, CURDATE()) AS days"))->get();
      $date_lent = LentBook::select(LentBook::raw("book_id, DATEDIFF(expire_date, CURDATE()) AS days"))->get();

      $subscription = User::find($id)->subscription->subscriptionPlan;

      return view('lent', compact('user', 'id', 'reserved', 'lent', 'date_reserved', 'date_lent', 'subscription'));
  }

  public function selectCancel(string $id, Book $book) {
   ReservedBook::whereBookId($book->id)->whereUserId($id)->delete();
   return redirect()->route('select.id', $id)->with('success', 'Canceled the reservation for ' . $book->title);
 }

 public function selectRenew(string $id, Book $book) {
   LentBook::whereUserId($id)->whereBookId($book->id)->update(['expire_date' => now()->addDays(14)]);
   return redirect()->route('select.id', $id)->with('success', 'Book successfully renewed for 2 weeks!');
 }
}
