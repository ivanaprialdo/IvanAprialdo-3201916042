<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PelayananRemaja extends Model
{
    use HasFactory;

    protected $table = 'bppelayananremaja';
    protected $guarded = ['id'] ;
}
