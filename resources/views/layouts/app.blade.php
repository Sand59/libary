<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Books For You</title>
      <link rel="icon" href="/storage/images/favicon.png">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>      

      $(document).ready(function(){
         $("#profile-icon").click(function(){
            $("#profile-panel").toggle();
         });

         $("#reserve").click(function(){
            $(".message-wrapper").show();
         });

         $(".cancel").click(function(){
            $(".alert, .message-wrapper").hide();
         });

         $(".open").click(function(){
            $(".header").addClass('responsive-nav');
            $(".responsive-nav").removeClass('header');
         });

         $(".close").click(function(){
            $(".responsive-nav").addClass('header');
            $(".header").removeClass('responsive-nav');
         });
      });

      </script>

      @vite(['resources/sass/app.scss', 'resources/js/app.js'])
   </head>
  <body>
      <header class="header">
         <div class="container container-1">
            <div class="row row-1">
               <div class="col col-1">
                  <a href="{{ route('home') }}">
                     <div class="media logo">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="">
                     </div>
                  </a>
               </div>
               <div class="col col-2">
                  <nav class="menu">
                  <ul>
                     <li>
                        <div class="button-wrapper">
                           <a class="{{ request()->is('/', 'books/*') ? 'button-1' : 'inactive' }}" href="{{ route('home') }}">
                           <img src="{{ asset('storage/images/icons/book.svg') }}" alt="">
                           Books</a>
                        </div>
                     </li>
                     @can('my-books')
                     <li>
                        <div class="button-wrapper">
                           <a class="{{ request()->is('mybooks') ? 'button-1' : 'inactive' }}" href="{{ route('mybooks') }}">
                           <img src="{{ asset('storage/images/icons/disc.svg') }}" alt="">
                           My books</a>
                        </div>
                     </li>
                     @endcan
                     @can('loan-books')
                     <li>
                        <div class="button-wrapper">
                           <a class="{{ request()->is('select/*') ? 'button-1' : 'inactive' }}" href="{{ route('select') }}">
                           <img src="{{ asset('storage/images/icons/disc.svg') }}" alt="">
                           Lent books</a>
                        </div>
                     </li>
                     @endcan
                     <li>
                        <div class="button-wrapper">
                           <a class="{{ request()->is('message') ? 'button-1' : 'inactive' }}" href="{{ route('message.index') }}">
                           <img src="{{ asset('storage/images/icons/message.svg') }}" alt="">
                           Messages</a>
                        </div>
                     </li>
                  </ul>
                  </nav>
               </div>
               <div class="col col-3">
                  <div class="menu">
                     <div class="media icon-small">
                        <img src="{{ asset('storage/images/icons/bell.png') }}" alt="">
                        <div class="indicator"></div>
                     </div>
                     <div id="profile-icon" class="media">
                        <img src="{{ asset('storage/images/icons/profile_2.png') }}" alt="">
                     </div>
                  </div>

                  <div id="profile-panel">
                     @guest()
                        <form action="">
                           <img src="{{ asset('storage/images/icons/log-in.svg') }}" alt="">
                           <a href="{{ route('login') }}">Login</a>
                        </form>
                     @endguest

                     @auth()
                        <p class="text-1 email">{{ auth()->user()->email }}</p>
                        <p class="text-1 role">({{ auth()->user()->roles[0]->name }})</p>
                        <hr>
                        <form method="POST" action="{{ route('logout') }}">
                           @csrf
                           <img src="{{ asset('storage/images/icons/log-out.svg') }}" alt="">
                           <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                        </form>
                     @endauth
                  </div>
               </div>
               <div class="col col-4">
                  <div class="media open">
                     <img src="{{ asset('storage/images/icons/menu.svg') }}" alt="">
                  </div>

                  <div class="media close">
                     <img src="{{ asset('storage/images/icons/x.svg') }}" alt="">
                  </div>
               </div>
            </div>
         </div>
         
      </header>

      @yield('content')

      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col col-1">
                  <a href="#collection" class="heading-1">Start reading<br><span>Now</span></a>
                  <div class="media logo">
                     <a href="">
                        <img src="{{ asset('storage/images/logo-dark.png') }}" alt="">
                     </a>
                  </div>               
               </div>
               <div class="col col-2">
                  @guest()
                     <a class="heading-2" href="{{ route('login') }}">Login</a>
                  @endguest

                  @auth()
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="heading-2" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                     </form>
                  @endauth

                  <a href="#collection" class="heading-2">Collection</a>
                  <a href="#subscriptions" class="heading-2">Subcription</a>
                  <a href="mailto:43383@hoornbeeck.nl" class="heading-2">Contact</a>
               </div>
            </div>
         </div>
      </footer>
   </body>
</hmtl>