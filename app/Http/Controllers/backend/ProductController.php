<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Multiimg;
use App\Models\Pro;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index()
    {
        $products = Pro::latest()->get();
        return view('backend.product.index', compact('products'));
    }

    ///////////////////////////////
    public function create()
    {
        $products=Pro::latest()->get();
        $activeVendor = User::where('status', 'active')->where('role', 'vendor')->latest()->get();
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('backend.product.store', compact('brands', 'categories', 'activeVendor','products'));
    }
    //////////////////////////////////////////////////////////////////////
    ///
    ///
    ///
    public function store(Request $request)
    {
        $image_name = time() . $request->file('thambnail')->getClientOriginalName();
        $request->file('thambnail')->move('upload/backend/product/', $image_name);

        $product_id = Pro::insert([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => 4,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'name' => $request->name,
            'code' => $request->code,
            'qty' => $request->qty,
            'tags' => $request->tags,
            'size' => $request->size,
            'color' => $request->color,
            'selling_Price' => $request->selling_Price,
            'discount' => $request->discount,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'thambnail' => $image_name,
            'vendor_id' => '1',
            'hot_deals' => $request->hot_deals,
            'special_offer' => $request->special_offer,
            'featured' => $request->brand_id,
            'special_deals' => $request->special_deals,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
        ///if ($images = $request->file('multi_img')) {
        ///    foreach ($images as $image) {
        ///        $filename = $image->getClientOriginalExtension();
        ///        $image->move(public_path('upload/backend/multiImg/'), $filename);
        ///        $product_id-> multi_img = $request->file('multi_img')->getClientOriginalExtension();
        ///    }
        ///}
        ///$images=2+time().$request ->file('multi_img')->getClientOriginalName();
        ///$request ->file('multi_img')->move('upload/backend/multiImg/',$images);
        ///$uploadPath='upload/backend/multiImg/'.$images;
        ///
        ///
        ///
        if ($request->hasFile('multi_img')) {
            $files = $request->file('multi_img');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::random(5) . "-" . date('his') . "-" . Str::random(5) . "." . $extension;
                $destinationPath = 'upload/backend/multiImg/' . '/';
                $file->move($destinationPath, $fileName);
            }
            $uploadPath='upload/backend/multiImg/'.$filename;
            Multiimg::insert([
                'product_id' => $product_id,
                'photo_name' => $uploadPath,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'ثبت با موفقیت انجام شد',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }
        $notification = array(
            'message' => 'ثبت با موفقیت انجام شد',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    ////////////////////////Card

    public function cart()
    {
        return view('cart.cart');
    }
    ///////////////////
    public function addToCart($id)
    {
        $product = Pro::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                "color"=>$product->color,
                "size"=>$product->size,
                "name" => $product->name,
                "qty" => 1,
                "selling_Price" => $product->selling_Price,
                "thambnail" => $product->thambnail
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    //////////////////
    public function update(Request $request)
    {
        if($request->id && $request->qty){
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    /////////////////
      public function remove(Request $request)
     {
         if($request->id) {
             $cart = session()->get('cart');
             if(isset($cart[$request->id])) {
                 unset($cart[$request->id]);
                 session()->put('cart', $cart);
             }
             session()->flash('success', 'Product removed successfully');
         }
     }

}

