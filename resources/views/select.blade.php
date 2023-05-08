@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="alert" id="alert">
   <div class="alert-wrapper form-background">
      <div class="content">
         <div class="heading-2">Select</div>
         <form method="GET" action="{{ route('select.email') }}">
            <div class="form-items">
               <x-input-label for="email" :value="__('Email')" />
               <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
               <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="button-wrapper">
               <button class="button-3">Find linked books</button>
            </div>
         </from>
      </div>
   </div>
</div>