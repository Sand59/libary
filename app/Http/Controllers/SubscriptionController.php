<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    public function update(int $id)
    {
      if(auth()->user()->subscription()->exists()) {

         $user = User::find(auth()->id())->subscription->subscriptionPlan;

         return redirect()->route('home')->with('error', 'You already have an ' . $user->name . ' subscription running. You can cancel at any time.'); 
      }
     
      else {
         Subscription::create([
            'user_id' => auth()->id(),
            'subscription_plan_id' => $id,
            'start_date' => now(),
            'end_date' => now()->addDays(365)
         ]);

         $user = User::find(auth()->id())->subscription->subscriptionPlan;

         return redirect()->route('home')->with('success', 'Your subscription is successfully updated to ' . $user->name); 
      }     
    }

    public function destroy(Subscription $subscription)
    {
        //
    }
}
