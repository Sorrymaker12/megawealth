<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    //protected $keyType = 'uuid';

    protected $guarded = ['transaction_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
