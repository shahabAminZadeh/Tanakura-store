<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippState extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function division()
    {
        return $this->belongsTo(ShippDivision::class,'division_id','id');
    }
    public function district()
    {
        return $this->belongsTo(ShippDistrict::class,'district_id','id');
    }
}
