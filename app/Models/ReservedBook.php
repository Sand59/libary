<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class ReservedBook extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
      'user_id',
      'book_id',
      'reserved_date',
      'expire_date',
    ];

    public function book() {
      return $this->belongsTo(Book::class);
    }
}
