<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';
    public $timestamps = true;
    protected $fillable = ['name', 'nutrition_fact', 'description','price', 'category_id'];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
