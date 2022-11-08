<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class IbadahPerseDoaPemuda extends Model
{
    use HasFactory;
    
    protected $dates = ['hari'];

    protected $table = 'ipersedoapemuda';
    protected $guarded = ['id'] ;

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['hari'])
        ->translatedFormat('l, d F Y');
    }
    
}
