<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

//    public function buys()
//    {
//        return $this->hasMany(Buy::class, 'customer_id', 'id');
//    }
}
