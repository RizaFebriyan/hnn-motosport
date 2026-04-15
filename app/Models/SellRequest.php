<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellRequest extends Model
{
    protected $fillable = [
        'category_name',
        'model',
        'year',
        'condition',
        'owner_name',
        'email',
        'whatsapp',
    ];
}
