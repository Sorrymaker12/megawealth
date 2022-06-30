<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CartItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $incrementing = false;

    protected $keyType = 'uuid';

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function realEstate()
    {
        return $this->hasMany(RealEstate::class);
    }
}
