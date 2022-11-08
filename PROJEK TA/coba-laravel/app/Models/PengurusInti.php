<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PengurusInti extends Model
{
    use HasFactory;

    protected $table = 'bpjpengurusinti';
    protected $guarded = ['id'] ;
}
