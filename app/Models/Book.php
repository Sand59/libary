<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ReservedBook;
use App\Models\LentBook;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'isbn_number',
      'author',
      'genre',
      'reserved',
      'lent',
   ];

   public function reservedbooks() {
      return $this->hasMany(ReservedBook::class);
   }

   public function lentbooks() {
      return $this->hasMany(LentBook::class);
   }
}