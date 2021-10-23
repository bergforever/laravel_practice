<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility_store extends Model
{
    use HasFactory;
    protected $table = 'utility_stores';
    protected $fillable=[

        'commodity_id','commodity_name','commodity_price','commodity_quantity'
        ];

}
