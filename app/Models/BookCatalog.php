<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCatalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'writer',
        'thick',
        'length',
        'width',
        'image',
        'launch_at',
        'glimpse'
    ];

    protected $hidden = [ 'created_at', 'updated_at' ];

    public function bookCategory() {
        return $this->belongsTo(BookCategory::class, 'category_id');
    }
}