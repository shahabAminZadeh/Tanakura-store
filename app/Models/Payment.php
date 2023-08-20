<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    use HasFactory;
    protected $guarded =[];
    public function IsOnline()
{
    return $this-> method == 'online';
}
    protected $attributes = [
        'status'=> 0
    ];

}
