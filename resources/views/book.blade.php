@extends('layouts.app')

@section('content')
<div class="section showcase">
   <div class="background">
      <img src="{{ asset('storage/images/home/collection') }}/{{ $book->cover }}" alt="">
   </div>
   <div class="background"></div>
   <div class="container container-1">
      <div class="row">
         <div class="col">
            <div class="media">
               <img src="{{ asset('storage/images/home/collection') }}/{{ $book->cover }}" alt="">
            </div>
         </div>
         <div class="col">
            <div class="heading-2">{{ $book->title }}</div>
            <div class="text-1 author">by {{ $book->author }}</div>
            <div class="heading-6">About this book</div>
            <div class="text-1 summary">{{ $book->summary }}</div>

            <div class="button-wrapper">
               @if(!$reserved->isEmpty())
               <button class="button-0" href="" alt="">
               Already reserved</button>

               @elseif(!$lent->isEmpty())
               <button class="button-0" href="" alt="">
               Already lend</button>

               @else
               <button id="reserve" class="button-1" href="">
               <img src="{{ asset('storage/images/icons/book.svg') }}" alt="">
               Reserve</button>
               
               @endif
            </div>

            <div class="info-mb">
               <div class="info-item">
                  <p class="text-3">Available</p>
                  <p class="text-1">{{ $book->available }} books</p>
               </div>
               <div class="info-item">
                  <p class="text-3">Pages</p>
                  <p class="text-1">{{ $book->pages }}</p>
               </div>
               <div class="info-item">
                  <p class="text-3">Rating</p>
                  <p class="text-1">{{ $book->rating }}</p>
               </div>
               <div class="info-item">
                  <p class="text-3">Read time</p>
                  <p class="text-1">{{ $book->read_time }} hours</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-2">
      <div class="info-dk">
         <div class="info-item">
            <p class="text-3">Available</p>
            <p class="text-1">{{ $book->available }} books</p>
         </div>
         <div class="info-item">
            <p class="text-3">Pages</p>
            <p class="text-1">{{ $book->pages }}</p>
         </div>
         <div class="info-item">
            <p class="text-3">Rating</p>
            <p class="text-1">{{ $book->rating }}</p>
         </div>
         <div class="info-item">
            <p class="text-3">Read time</p>
            <p class="text-1">{{ $book->read_time }} hours</p>
         </div>
      </div>
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
            <div class="col col-3">
               <div class="media">
                  <img src="{{ asset('storage/images/home/collection') }}/{{ $book->cover }}" alt="">
               </div>
               <p class="text-1">Chapter II</p>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="message-wrapper">
   <div class="message">
      <div class="content">
         <div class="heading-2">
            Reserve book
         </div>
         <div class="text-1">
            Are you sure you want to add {{ $book->title }} to your account?
         </div>
         <div class="button-wrapper">
            <button class="cancel button-3">
               Cancel
            </button>
            <form action="{{ route('books.reserved', $book->id) }}" method="POST">
               @csrf
               <button class="button-4">
                  Add
               </button>
            </form>
         </div>
         <div class="text-2">*A reservation expires in 2 weeks</div>
      </div>
   </div>
</div>

@include('common.alert')

<div class="section collection" id="collection">
   <div class="container container-1">
      <div class="row row-1">
         <div class="col col-1">
            <h1 class="heading-2">Read other books</h1>
            <h3 class="heading-3">Picked for you</h3>
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
@endsection