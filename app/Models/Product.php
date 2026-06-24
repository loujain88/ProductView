<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'price', 'categories_id', 'description'])]
class Product extends Model
{
    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
