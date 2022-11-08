<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PelayananPemuda extends Model
{
    use HasFactory;

    protected $table = 'bppelayananpemuda';
    protected $guarded = ['id'] ;
}
