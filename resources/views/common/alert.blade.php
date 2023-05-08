{{-- Message --}}
@if (Session::has('success'))
<div class="alert">
   <div class="alert-wrapper">
      <div class="content">
         <div class="heading-2">Success</div>
         <div class="text-1">{{ session('success') }}</div>
         <div class="button-wrapper">
            <button class="cancel button-3">
               Close
            </button>
         </div>
      </div>
   </div>
</div>
@endif

@if (Session::has('error'))
<div class="alert">
   <div class="alert-wrapper">
      <div class="content">
         <div class="heading-2">Error</div>
         <div class="text-1">{{ session('error') }}</div>
         <div class="button-wrapper">
            <button class="cancel button-3">
               Close
            </button>
         </div>
      </div>
   </div>
</div>
@endif