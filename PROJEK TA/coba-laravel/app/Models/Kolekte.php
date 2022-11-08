<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kolekte extends Model
{
    use HasFactory;
    protected $table = 'kolekte';
    protected $guarded = ['id'] ;
}
