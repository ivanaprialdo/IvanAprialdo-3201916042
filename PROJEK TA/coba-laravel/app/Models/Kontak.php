<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak';
    protected $guarded = ['id'] ;

}
