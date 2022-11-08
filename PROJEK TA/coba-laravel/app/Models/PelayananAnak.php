<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PelayananAnak extends Model
{
    use HasFactory;

    protected $table = 'bppelayanananak';
    protected $guarded = ['id'] ;
}
