@extends('layouts.app')
@include('common.alert')

@section('content')
<div class="section hero">
   <div class="container container-1">
      <div class="row">
         <div class="col col-1">
            <h1 class="heading-1">
               Read to get <br>
               smarter
            </h1>
            <p class="text-1">Explore new worlds from authors</p>
            <form class="form-1" action="">
               <img src="{{ asset('storage/images/icons/search.svg') }}" alt="">
               <div class="field-1">                  
                  <p class="text-1">Titles, authors, or topics</p>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="container-2">
      <div class="row row-2">
         <div class="col-1">
            <div class="latest">
               <h3 class="heading-3">Latest Books</h3>
               <div class="media">
                  <img src="{{ asset('storage/images/icons/arrow-right.svg') }}" alt="">
               </div>
            </div>
         </div>
         <div class="col-wrapper">
            <div class="col col-2">
               <div class="media">
                  <img src="{{ asset('storage/images/home/book-1.png') }}" alt="">
               </div>
               <p class="text-1">Flowers For Algernon</p>
            </div>
            <div class="col col-3">
               <div class="media">
                  <img src="{{ asset('storage/images/home/book-2.png') }}" alt="">
               </div>
               <p class="text-1">Ulysses</p>
            </div>
            <div class="col col-4">
               <div class="media">
                  <img src="{{ asset('storage/images/home/book-3.png') }}" alt="">
               </div>
               <p class="text-1">Less Then Zero</p>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="section collection" id="collection">
   <div class="container container-1">
      <div class="row row-1">
         <div class="col col-1">
            <h1 class="heading-2">Collection</h1>
            <h3 class="heading-3">Only the best books</h3>
         </div>
      </div>
      <div class="row row-2">
         @foreach($books as $book)
            <div class="col">
               <div class="media">
                  <img src="{{ asset('storage/images/home/collection') }}/{{ $book->cover }}" alt="">
                  <div class="hover">
                     <div class="line">
                        <h1 class="heading-4">{{ $book->title }}</h1>
                        <p class="text-1">{{ $book->author }}</p>
                     </div>
                     <div class="button-wrapper">
                        <a class="button-1" href="{{ route('books', $book->id) }}">
                        <img src="{{ asset('storage/images/icons/book.svg') }}" alt="">
                        View</a>
                     </div>
                  </div>
               </div>
               <p class="text-1">{{ $book->title }}</p>
            </div>
         @endforeach
      </div>
   </div>
</div>

<div class="section subscription" id="subscription">
   <div class="gradient"></div>
   <div class="container">
      <div class="row row-1">
         <div class="col col-1">
            <div class="heading-2">Subscription</div>
            <p class="text-1">Only choose the one that fits for you</p>
         </div>
      </div>
      <div class="row row-2">
         <div class="col col-1">
            <div class="top">
               <div class="icon"></div>
               <div class="price">
                  <div class="heading-5">Basic</div>
                  <div class="month">
                     <p class="text-1">€</p>
                     <div class="heading-5">5</div>
                     <p class="text-1">/ month</p>
                  </div>
               </div>
            </div>

            <div class="options">
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Loan up to <span>5 books</span></p>
               </div>
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Up to <span>2 persons</span></p>
               </div>
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Get <span>support</span</p>
               </div>
            </div>

            <div class="button-wrapper">
               <form action="{{ route('subscription.update', '1') }}" method="POST">
                  @csrf
                  <button class="button-2">
                     Choose plan
                     <img src="{{ asset('storage/images/icons/arrow-right.svg') }}" alt=""></a>
                  </button>
               </form>
            </div>
         </div>

         <div class="col col-2">
            <div class="top">
               <div class="icon"></div>
               <div class="price">
                  <div class="heading-5">Premium</div>
                  <div class="month">
                     <p class="text-1">€</p>
                     <div class="heading-5">15</div>
                     <p class="text-1">/ month</p>
                  </div>
               </div>
            </div>

            <div class="options">
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Loan up to <span>15 books</span></p>
               </div>
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Up to <span>10 persons</span></p>
               </div>
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Get <span>support</span</p>
               </div>
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Acces to our <span>E-Books</span</p>
               </div>
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Unlimited acces all our <span>libaries</span</p>
               </div>
            </div>

            <div class="button-wrapper">
               <form action="{{ route('subscription.update', '3') }}" method="POST">
                  @csrf
                  <button class="button-2">
                     Choose plan
                     <img src="{{ asset('storage/images/icons/arrow-right.svg') }}" alt=""></a>
                  </button>
               </form>
            </div>
         </div>

         <div class="col col-3">
            <div class="top">
               <div class="icon"></div>
               <div class="price">
                  <div class="heading-5">Standard</div>
                  <div class="month">
                     <p class="text-1">€</p>
                     <div class="heading-5">10</div>
                     <p class="text-1">/ month</p>
                  </div>
               </div>
            </div>

            <div class="options">
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Loan up to <span>10 books</span></p>
               </div>
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Up to <span>5 persons</span></p>
               </div>
               <div class="options-item">
                  <div class="media">
                     <img src="/storage/images/icons/check.svg" alt="">
                  </div>
                  <p class="text-1">Get <span>support</span</p>
               </div>
            </div>

            <div class="button-wrapper">
               <form action="{{ route('subscription.update', '2') }}" method="POST">
                  @csrf
                  <button class="button-2">
                     Choose plan
                     <img src="{{ asset('storage/images/icons/arrow-right.svg') }}" alt=""></a>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection