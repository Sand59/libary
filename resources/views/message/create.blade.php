@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="alert" id="alert">
   <div class="alert-wrapper form-background">
      <div class="content">
         <div class="heading-2">Message</div>
         <form action="{{ route('message.store') }}" method="POST" >
         @csrf 
            <div class="form-items">
               <x-input-label for="title" :value="__('Title')" />
               <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
               <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="form-items">
               <x-input-label for="message" :value="__('Message')" />
               <x-text-input id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')" required autofocus />
               <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>

            <div class="form-items">
               <x-input-label for="date" :value="__('Date')" />
               <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus />
               <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>
      
            <div class="button-wrapper">
               <button class="button-3">Send message</button>
            </div>
         </from>
         <div class="text-2">*This message will be send to every user</div>
      </div>
   </div>
</div>