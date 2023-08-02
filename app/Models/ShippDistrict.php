<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippDistrict extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function division()
    {
        return $this->belongsTo(ShippDivision::class,'division_id','id');
    }
}
