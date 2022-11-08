<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class IbadahKeluarga extends Model
{
    use HasFactory;
    
    protected $dates = ['hari'];

    protected $table = 'ikeluarga';
    protected $guarded = ['id'] ;

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['hari'])
        ->translatedFormat('l, d F Y');
    }
    
}
