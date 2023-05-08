@extends('layouts.app')

@section('content')

<div class="section header-background"></div>
<div class="gradient"></div>

<div class="section messages">
   <div class="container">

      <div class="row">
         <div class="col">
            <a href="{{ route('message.create') }}">
               <div class="heading-2">Messages
                  @can('create-message')
                     <img src="{{ asset('storage/images/icons/plus.svg') }}" alt="">
                  @endcan
               </div>
            </a>         
         </div>
         @foreach($messages as $message)
         <div class="col col-1">
            <div class="heading-4">
               {{ $message->title }}
            </div>
            <p>{{ $message->message }}</p>
            <p>{{ $message->date }}</p>
         </div>
         @endforeach
      </div>

      <div class="row">
         <div class="col">
            <h3 class="heading-2">Fines</h3>
         </div>
            @forelse ($fines as $fine)
               <div class="col col-1">
                  <div class="heading-4">
                     You have a fine
                  </div>
                  <p>${{ $fine->fine_amount }}</p>
                  <p>{{ $fine->days_late }} days to late</p>
               </div>
            @empty
               <div class="col">
                  <div class="text-1">You have nothing to worry about</div>
               </div>
            @endforelse
      </div>    

   </div>
</div>

@endsection('content')
