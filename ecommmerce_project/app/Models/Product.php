<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'image',
        'qty',
        'price',
        'is_active',
    ];

    public function catagory()
    {
        return $this->hasOne(Catagory::class, 'id','catagory_id');
    }
}
