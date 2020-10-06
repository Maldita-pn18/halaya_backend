<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsedIngredients extends Model
{
    protected $guarded = [];
    protected $table = 'used_ingredients';
    protected $fillable = [
        'ingredients_id', 'use_ingredients_amount'
    ];
}