<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    use HasFactory;

    protected $table = 'bdburger';

    protected $fillable = [
        'id',
        'name',
        'description',
        'regular_price',
        'sale_price',
        'portion_size',
        'calories',
        'allegies',
        'tags',
        'image',
    ];
}
