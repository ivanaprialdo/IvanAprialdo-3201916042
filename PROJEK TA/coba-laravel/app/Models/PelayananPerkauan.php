<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PelayananPerkauan extends Model
{
    use HasFactory;

    protected $table = 'bppelayananperkauan';
    protected $guarded = ['id'] ;
}
