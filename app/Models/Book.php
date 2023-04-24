<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'cover_image'
    ];

    public function bookTypes()
    {
        return $this->hasMany(BookType::class);
    }

    public function getPriceByType($type)
    {
        return $this->bookTypes()->where('name', $type)->firstOrFail()->price;
    }

    public function getSoftCopyPrice()
    {
        return $this->getPriceByType('Softcopy');
    }

    public function getHardCopyPrice()
    {
        return $this->getPriceByType('Hardcopy');
    }

    public function bookStoreStocks()
    {
        return $this->hasMany(BookStoreStock::class);
    }

}
