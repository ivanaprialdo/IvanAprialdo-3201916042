<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class IbadahPerkaria extends Model
{
    use HasFactory;
    
    protected $dates = ['hari'];

    protected $table = 'iperkaria';
    protected $guarded = ['id'] ;

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['hari'])
        ->translatedFormat('l, d F Y');
    }
    
}
