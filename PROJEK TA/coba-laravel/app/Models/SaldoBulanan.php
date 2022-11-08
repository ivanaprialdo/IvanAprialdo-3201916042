<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoBulanan extends Model
{
    use HasFactory;
    protected $table = 'saldo_bulanan';
    protected $guarded = ['id'] ;

}
