<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persepuluhan extends Model
{
    use HasFactory;
    protected $table = 'persepuluhan';
    protected $guarded = ['id'] ;

}
