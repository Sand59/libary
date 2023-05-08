@extends('layouts.app')
@include('common.alert')

@section('content')
   <div class="section header-background"></div>
   <div class="gradient"></div>

   <div class="section reservations">
      <div class="container">
         <div class="row row-1">
            <div class="col">
               <a href="{{ route('select') }}">
                  <div class="heading-2">{{ $user->name }}'s books <img src="{{ asset('storage/images/icons/repeat.svg') }}" alt=""></div>
               </a>
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
                              <form action="{{ route('select.lent', [$id, $book->book->id]) }}" method="POST">
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
                              
                              @can('loan-books')
                              <form id="loan-mb" action="{{ route('select.lent', [$id, $book->book->id]) }}" method="POST">
                                 @csrf
                                 <img src="{{ asset('storage/images/icons/book-alt.svg') }}" alt="">
                              </form>
                              @endcan

                              <form action="{{ route('select.cancel', [$id, $book->book->id]) }}" method="POST">
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
                              <form action="{{ route('select.renew', [$id, $book->book->id]) }}" method="POST">
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
                           <div class="cancel">
                              <form action="{{ route('select.return', [$id, $book->book->id]) }}" method="POST">
                                 @csrf
                                    <button class="button-1">
                                    <img src="{{ asset('storage/images/icons/corner-down-left.svg') }}" alt=""></a>
                                 </button>
                              </form>
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