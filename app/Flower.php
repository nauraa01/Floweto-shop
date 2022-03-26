<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $table = 'flowers';
    protected $fillable = ['name', 'category', 'price', 'description', 'image' ];
}
