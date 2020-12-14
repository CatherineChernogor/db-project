<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'isbn', 'storage_id'];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_book');
    }

    public function storage(){
        return $this->belongsTo(Storage::class);
    }
}
