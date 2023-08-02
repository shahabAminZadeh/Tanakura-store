<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pro;
use App\Models\SubCategory;
use App\Support\storage\contracts\StorageInterFace;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index()
    {


        return view('tanakoora.index');
    }
    public function product_detail( $id)
    {

        $product=Pro::findOrFail($id);
        $color=$product->color;
        $product_color=explode(',',$color);
        $size=$product->size;
        $product_size=explode(',',$size);
        $cat_id=$product->category_id;
        $relatedProduct=Pro::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();

        $hot_deals=Pro::where('hot_deals',1)->where('discount','!=',NULL)->orderBy('id','DESC')->limit(3)->get();



        return view('tanakoora.product.product_detail',compact('product','product_color','product_size','relatedProduct','hot_deals'));


    }
    /////////////////////////
    public function ProductByCategory($id)
    {
        $category=Category::find($id);
        $products=Pro::where('status','1')->where('category_id',$id)->orderBy('id','DESC')->get();
        $subCategory=SubCategory::where('category_id',$id)->orderBy('id','DESC')->get();
        return view('tanakoora.product.productByCategory',compact('products','subCategory','category'));

    }
    /////////////////////////////
    public function ProductBySubCategory($id)
    {

        $products=Pro::where('status','active')->where('subcategory_id',$id)->orderBy('id','DESC')->get();
        return view('tanakoora.product.productBySubCategory',compact('products'));

    }
    //////////////////////


    public function ProductViewAjax($id)
    {
        $product=Pro::with('category','brand')->findOrFail($id);

        $color=$product->color;
        $product_color=explode(',',$color);

        $size=$product->size;
        $product_size=explode(',',$size);

        return response()->json(array(
            'product'=>$product,
            'color'=>$product_color,
            'size'=>$product_size,
        ));
    }
    //////////////////////////////

    public function product_search(Request $request)
    {
        $request->validate(['search'=>'required']);
        $item=$request->search;
        $categories=Category::orderBy('name','ASC')->get();
        $products=Pro::where('name','LIKE',"%$item%")->get();
        $new_product=Pro::orderBy('id','DESC')->limit(3)->get();
        return view('tanakoora.product.product_search',compact('categories','products','new_product','item'));
    }

}
