<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany(SaleProduct::class, 'sale_id', 'id');
    }
}
