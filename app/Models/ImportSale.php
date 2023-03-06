<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImportSale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id')->withTrashed();
    }

    public function products() {
        return $this->hasMany(ImportSaleProduct::class, 'sale_id', 'id');
    }
}
