<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Penasehat extends Model
{
    use HasFactory;

    protected $table = 'bpjpenasehat';
    protected $guarded = ['id'] ;
}
