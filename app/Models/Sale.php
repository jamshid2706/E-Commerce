<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

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
