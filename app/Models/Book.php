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
    protected $appends = ['book_types'];

    public function bookTypes()
    {
        return $this->hasMany(BookType::class);
    }

    public function getBookTypesAttribute()
    {
        return $this->bookTypes()->get()->toArray();
    }

    public function getIdByType($type)
    {
        return $this->bookTypes()->where('name', $type)->firstOrFail();
    }

    public function getSoftCopy()
    {
        return $this->getIdByType('Softcopy');
    }

    public function getHardCopy()
    {
        return $this->getIdByType('Hardcopy');
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
