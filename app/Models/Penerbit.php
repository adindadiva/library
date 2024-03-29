<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'penerbit';
    protected $fillable = ['nama', 'slug'];

    // relation
    public function book()
    {
        return $this->hasMany(Book::class);
    }

    // mutator
    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = ucfirst($value);
    }
}
