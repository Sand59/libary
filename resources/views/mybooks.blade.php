@extends('layouts.app')
@include('common.alert')

@section('content')
   <div class="section header-background"></div>
   <div class="gradient"></div>
     
   <div class="section reservations">
      <div class="container">
         <div class="row row-1">
            <div class="col">
               <div class="heading-2">My books</div>
               <div class="heading-3">Reserved</div>
               @if($reserved->isEmpty())
                  <div class="text-1">You have not reserved any books at the moment.</div>
               @endif
            </div>
         </div>
         <div class="row row-2">
            @foreach($reserved as $book)
               <div class="col">
                  <div class="media">
                     <img src="{{ asset('storage/images/home/collection') }}/{{ $book->book->cover }}" alt="">
                     <div class="content"> 
                        <img src="{{ asset('storage/images/home/collection') }}/{{ $book->book->cover }}" alt="">
                        <div class="content-info">
                           <div class="line">
                              <h1 class="heading-4">{{ $book->book->title }}</h1>
                              <p class="text-1">{{ $book->book->author }}</p>
                           </div>
                           <div class="button-wrapper">
                              <!-- assignRole -->
                              @can('loan-books')
                              <form action="{{ route('select.id', $book->book->id) }}" method="POST">
                                 @csrf
                                    <button class="button-1">
                                    <img src="{{ asset('storage/images/icons/book.svg') }}" alt="">Loan</a>
                                 </button>
                              </form>
                              @endcan
                           </div>
                           <div class="expire">
                              <div class="text-1">Expires</div>
                              <div class="text-1">In 
                                    @foreach($date_reserved->where('book_id', $book->book->id) as $days_diff)
                                       {{ $days_diff->days}}
                                    @endforeach
                                 days
                              </div>                          
                           </div>
                           <div class="cancel">
                              <form action="{{ route('mybooks.cancel', $book->book->id) }}" method="POST">
                                 @csrf
                                    <button class="button-1">
                                    <img src="{{ asset('storage/images/icons/x-circle.svg') }}" alt=""></a>
                                 </button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>

         <div class="row row-1">
            <div class="col">
               <div class="heading-3">Loaned books</div>
               @if($lent->isEmpty())
                  <div class="text-1">You have not lent any books at the moment.</div>
               @else
                  <div class="text-1">You have {{ count($lent) }} out of {{ $subscription->max_books }} books</div>
               @endif
            </div>
         </div>
         <div class="row row-2">
            @foreach($lent as $book)
               <div class="col">
                  <div class="media">
                     <img src="{{ asset('storage/images/home/collection') }}/{{ $book->book->cover }}" alt="">
                     <div class="content">  
                        <img src="{{ asset('storage/images/home/collection') }}/{{ $book->book->cover }}" alt="">
                        <div class="content-info">
                           <div class="line">
                              <h1 class="heading-4">{{ $book->book->title }}</h1>
                              <p class="text-1">{{ $book->book->author }}</p>
                           </div>
                           <div class="button-wrapper">
                                 <form action="{{ route('mybooks.renew', $book->book->id) }}" method="POST">
                                 @csrf
                                    <button class="button-1">
                                    <img src="{{ asset('storage/images/icons/book.svg') }}" alt="">Renew</a>
                                 </button>
                              </form>
                           </div>
                           <div class="expire">
                              <div class="text-1">Expires</div>
                              <div class="text-1">In 
                                    @foreach($date_lent->where('book_id', $book->book->id) as $days_diff)
                                       {{ $days_diff->days}}
                                    @endforeach
                                 days
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
      </div>
   </div>
@endsection