<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
      'user_id',
      'subscription_plan_id',
      'start_date',
      'end_date',
    ];
    
    public function subscriptionPlan() {
      return $this->belongsTo(SubscriptionPlan::class);
    }
}
