<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PelayananPerkaria extends Model
{
    use HasFactory;

    protected $table = 'bppelayananperkaria';
    protected $guarded = ['id'] ;
}
