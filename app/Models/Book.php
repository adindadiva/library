<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = ['judul', 'stok', 'sampul', 'slug', 'penulis', 'kategori_id', 'penerbit_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
