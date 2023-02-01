<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'client_id',
        'amount',
    ];

    public function products() {
        return $this->hasMany(SaleProduct::class, 'sale_id', 'id');
    }
    public function client() {
        return $this->belongsTo(Client::class, 'client_id', 'id');
}
}
