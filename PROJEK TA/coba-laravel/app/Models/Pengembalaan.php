<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pengembalaan extends Model
{
    use HasFactory;

    protected $table = 'bpjpengembalaan';
    protected $guarded = ['id'] ;
}
