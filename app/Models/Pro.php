<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;

class Pro extends Model
{
    use HasFactory, Markable;
    protected $guarded=[];
    public function vendor()
    {
        return $this->belongsTo(User::class,'vendor_id','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function SubCategory()
    {
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }
    protected static $marks = [
        Favorite::class,
    ];
    use HasFactory;

}
