<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'description',
        'length',
        'publisher',
        'stock',
        'price',
    ];

    public $timestamps = false;

    /**
     * Get the book that owns the detail
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
