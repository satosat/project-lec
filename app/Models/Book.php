<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title','author'];

    /**
     * Get the detail associated with the book
     */
    public function detail()
    {
        return $this->hasOne(BookDetail::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
