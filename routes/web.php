<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\BlogCategoryController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CouponController;
use App\Http\Controllers\backend\DistrictController;
use App\Http\Controllers\backend\DivisionController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\SeoController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\StateController;
use App\Http\Controllers\backend\SttingController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\user\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WishlistController;
use App\Support\storage\Contracts\StorageInterFace;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[\App\Http\Controllers\frontend\indexController::class,'index']);
Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
    Route::post('/dashboard/store',[UserController::class,'UserProfileStore'])->name('UserProfileStore');
    Route::get('/logoutUser',[UserController::class,'logoutUser'])->name('logoutUser');
    Route::get('ChangePass',[UserController::class,'UserChangePass'])->name('UserChangePass');
    Route::post('UpdatePass',[UserController::class,'UserUpdatePassword'])->name('UserUpdatePassword');
});
//Route::get('/dashboard', function () {
   /// return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard.admin');
    Route::get('admin/logOut',[AdminController::class,'logOut'])->name('adminLogout');
    Route::get('admin/profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::post('admin/profile/store',[AdminController::class,'Store'])->name('AdminProfileStore');
    Route::get('admin/ChangePass',[AdminController::class,'AdminChangePassword'])->name('AdminChangePass');
    Route::post('admin/UpdatePass',[AdminController::class,'AdminUpdatePassword'])->name('AdminUpdatePassword');
});
Route::middleware(['auth','role:vendor'])->group(function () {
    Route::get('vendor/dashboard',[VendorController::class,'dashboard'])->name('dashboard.vendor');
    Route::get('vendor/logOut',[VendorController::class,'logOut'])->name('vendorLogout');
    Route::get('vendor/ChangePass',[VendorController::class,'VendorChangePass'])->name('VendorChangePass');
    Route::post('vendor/UpdatePass',[VendorController::class,'VendorUpdatePass'])->name('VendorUpdatePass');
    Route::get('vendor/profile',[VendorController::class,'VendorProfile'])->name('VendorProfile');
    Route::post('vendor/profile/store',[VendorController::class,'VendorProfileStore'])->name('VendorProfileStore');
});
Route::get('vendor/become',[VendorController::class,'VendorBecome'])->name('VendorBecome');
Route::post('vendor/register',[VendorController::class,'VendorRegister'])->name('VendorRegister');
require __DIR__.'/auth.php';
Route::get('admin/login',[AdminController::class,'login']);
Route::get('vendor/login',[VendorController::class,'login'])->name('login.vendor');
Route::prefix('admin')->group(function ()
{
    Route::get('brand/index',[BrandController::class,'index'])->name('AdminBrandIndex');
    Route::get('brand/create',[BrandController::class,'create'])->name('AdminBrandCreate');
    Route::post('brand/store',[BrandController::class,'store'])->name('AdminBrandStore');
    Route::get('brand/{brand}/edit',[BrandController::class,'edit'])->name('AdminBrandEdit');
    Route::get('brand/delete/{brand}',[BrandController::class,'delete'])->name('AdminBrandDelete');
    Route::put('brand/{id}/update',[BrandController::class,'update'])->name('AdminBrandUpdate');
});
Route::prefix('admin.category')->group(function ()
{
    Route::get('index',[CategoryController::class,'index'])->name('AdminCategoryIndex');
    Route::get('create',[CategoryController::class,'create'])->name('AdminCategoryCreate');
    Route::post('store',[CategoryController::class,'store'])->name('AdminCategoryStory');
    Route::get('/{category}/edit',[CategoryController::class,'edit'])->name('AdminCategoryEdit');
    Route::put('/{id}/update',[CategoryController::class,'update'])->name('AdminCategoryUpdate');
    Route::get('/{category}/destroy',[CategoryController::class,'destroy'])->name('AdminCategoryDestroy');
});
Route::prefix('admin.sub_category')->group(function ()
{
    Route::get('index',[SubCategoryController::class,'index'])->name('AdminSubCategoryIndex');
    Route::get('create',[SubCategoryController::class,'create'])->name('AdminSubCategoryCreate');
    Route::post('store',[SubCategoryController::class,'store'])->name('AdminSubCategoryStore');
    Route::get('/{id}/edit',[SubCategoryController::class,'edit'])->name('AdminSubCategoryEdit');
    Route::post('update',[SubCategoryController::class,'update'])->name('AdminSubCategoryUpdate');
    Route::get('/{id}/destroy',[SubCategoryController::class,'destroy'])->name('AdminSubCategoryDestroy');
    Route::get('/subcategory/ajax/{category_id}',[SubCategoryController::class,'GetSubCategory'])->name('AdminGetSubCategory');

});




Route::prefix('admin.VendorManager')->group(function ()
{
    ///////////////////////////////
    //////inActive=>Active
    Route::get('InActive',[AdminController::class,'InActive'])->name('AdminVendorINActive');

    Route::get('InActive/details/{id}',[AdminController::class,'InActiveDetails'])->name('AdminVendorINActiveDetails');

    Route::post('Active/approve',[AdminController::class,'ActiveApprove'])->name('Vendor_Active_Approve');


    /////////////////////////////////////
    //////Active=>inActive

    Route::get('Active',[AdminController::class,'Active'])->name('AdminVendorActive');

    Route::get('Active/details/{id}',[AdminController::class,'ActiveDetails'])->name('AdminVendorActiveDetails');

    Route::post('INActive/approve',[AdminController::class,'InActiveApprove'])->name('InActiveApprove');
});

Route::prefix('product')->group(function ()
{
    Route::get('index',[ProductController::class,'index'])->name('ProductIndex');
    Route::get('create',[ProductController::class,'create'])->name('ProductCreate');
    Route::post('store',[ProductController::class,'store'])->name('ProductStore');
});


Route::prefix('slider')->group(function ()
{
    Route::get('index',[SliderController::class,'index'])->name('ُSliderIndex');
    Route::get('create',[SliderController::class,'create'])->name('SliderCreate');
    Route::get('edit/{slider}',[SliderController::class,'edit'])->name('SliderEdit');
    Route::post('store',[SliderController::class,'store'])->name('SliderStore');
    Route::put('{id}/update',[SliderController::class,'update'])->name('SliderUpdate');
    Route::get('{slider}/destroy',[SliderController::class,'destroy'])->name('SliderDestroy');

});
Route::prefix('banner')->group(function ()
{
    Route::get('index',[BannerController::class,'index'])->name('ُBannerIndex');
    Route::get('create',[BannerController::class,'create'])->name('ُBannerCreate');
    Route::get('edit/{banner}',[BannerController::class,'edit'])->name('ُBannerEdit');
    Route::post('store',[BannerController::class,'store'])->name('ُBannerStore');
    Route::put('{id}/update',[BannerController::class,'update'])->name('ُBannerUpdate');
    Route::get('{banner}/destroy',[BannerController::class,'destroy'])->name('ُBannerDestroy');

});
Route::prefix('coupon')->group(function ()
{
    ///////////////backend
    Route::get('index',[CouponController::class,'index'])->name('ُCouponIndex');
    Route::get('create',[CouponController::class,'create'])->name('ُCouponCreate');
    Route::get('edit/{coupon}',[CouponController::class,'edit'])->name('ُCouponEdit');
    Route::post('store',[CouponController::class,'store'])->name('ُCouponStore');
    Route::put('{id}/update',[CouponController::class,'update'])->name('ُCouponUpdate');
    Route::get('{coupon}/destroy',[CouponController::class,'destroy'])->name('ُCouponDestroy');
    ///////////////frontend
    Route::post('coupon/apply',[\App\Http\Controllers\frontend\CouponController::class,'apply'])->name('coupon.apply');



});

Route::prefix('division')->group(function ()
{
    Route::get('index',[DivisionController::class,'index'])->name('ُDivisionIndex');
    Route::get('create',[DivisionController::class,'create'])->name('ُDivisionCreate');
    Route::get('edit/{division}',[DivisionController::class,'edit'])->name('DivisionEdit');
    Route::post('store',[DivisionController::class,'store'])->name('ُDivisionStore');
    Route::put('{id}/update',[DivisionController::class,'update'])->name('DivisionUpdate');
    Route::get('{division}/destroy',[DivisionController::class,'destroy'])->name('ُDivisionDestroy');
});



Route::get('/product-detail/{id}',[\App\Http\Controllers\frontend\indexController::class,'product_detail'])->name('product-detail');
Route::get('/product-vendor/{id}',[UserController::class,'vendor_detail'])->name('vendor_detail');
Route::get('/AllVendor',[UserController::class,'AllVendor'])->name('AllVendor');
Route::get('/ProductByCategory/{id}',[\App\Http\Controllers\frontend\indexController::class,'ProductByCategory'])->name('ProductByCategory');
Route::get('/ProductBySubCategory/{id}',[\App\Http\Controllers\frontend\indexController::class,'ProductBySubCategory'])->name('ProductBySubCategory');



Route::prefix('district')->group(function ()
{
    Route::get('index',[DistrictController::class,'index'])->name('ُDistrictIndex');
    Route::get('create',[DistrictController::class,'create'])->name('ُDistrictCreate');
    Route::get('edit/{district}',[DistrictController::class,'edit'])->name('DistrictEdit');
    Route::post('store',[DistrictController::class,'store'])->name('ُDistrictStore');
    Route::put('{id}/update',[DistrictController::class,'update'])->name('DistrictUpdate');
    Route::get('{district}/destroy',[DistrictController::class,'destroy'])->name('DistrictDestroy');
    Route::get('/district/ajax',[DistrictController::class,'GetDistrict']);
});



Route::prefix('state')->group(function ()
{
    Route::get('index',[StateController::class,'index'])->name('StateIndex');
    Route::get('create',[StateController::class,'create'])->name('ُStateCreate');
    Route::get('edit/{state}',[StateController::class,'edit'])->name('StateEdit');
    Route::post('store',[StateController::class,'store'])->name('StateStore');
    Route::put('{id}/update',[StateController::class,'update'])->name('StateUpdate');
    Route::get('{state}/destroy',[StateController::class,'destroy'])->name('StateDestroy');
});

Route::prefix('wish_list')->group(function ()
{
    Route::get('favorite-add/{id}',[ WishlistController::class, 'favoriteAdd'])->name('addToWishList');
    Route::get('favorite-remove/{id}', [WishlistController::class, 'favoriteRemove'])->name('favorite.remove');
    Route::get('wishList',[WishlistController::class,'wishlist'])->name('wishlist');

});

Route::prefix('review')->group(function ()
{
   Route::post('add_review',[ReviewController::class , 'add_review'])->name('add_review');
    Route::get('pendingComment',[ReviewController::class , 'Pending'])->name('Pending');
    Route::get('ApprovePendingComment/{id}',[ReviewController::class , 'ApprovePending'])->name('ApprovePending');
    Route::get('PublishComment',[ReviewController::class , 'Publish'])->name('Publish');
    Route::get('DeleteComment/{id}',[ReviewController::class , 'delete'])->name('delete');
});

Route::prefix('blog_category')->group(function ()
{
    Route::get('index',[BlogCategoryController::class,'index'])->name('ُCategoryBlogIndex');
    Route::get('create',[BlogCategoryController::class,'create'])->name('ُCategoryBlogCreate');
    Route::get('edit/{C_blog}',[BlogCategoryController::class,'edit'])->name('ُCategoryBlogEdit');
    Route::post('store',[BlogCategoryController::class,'store'])->name('ُCategoryBlogStore');
    Route::put('{id}/update',[BlogCategoryController::class,'update'])->name('ُCategoryBlogUpdate');
    Route::get('{C_blog}/destroy',[BlogCategoryController::class,'destroy'])->name('ُCategoryBlogDestroy');

});

Route::prefix('blog')->group(function ()
{
    ////////////////frontend
    Route::get('blogs',[\App\Http\Controllers\frontend\BlogController::class,'blogs'])->name('blogs');
    Route::get('blog_detail',[\App\Http\Controllers\frontend\BlogController::class,'blog_detail'])->name('blog_detail');
    ///////////////backend
    Route::get('index',[BlogController::class,'index'])->name('ُBlogIndex');
    Route::get('create',[BlogController::class,'create'])->name('ُBlogCreate');
    Route::get('edit/{blog}',[BlogController::class,'edit'])->name('ُBlogEdit');
    Route::post('store',[BlogController::class,'store'])->name('BlogStore');
    Route::put('{id}/update',[BlogController::class,'update'])->name('ُBlogUpdate');
    Route::get('{blog}/destroy',[BlogController::class,'destroy'])->name('ُBlogDestroy');

});


Route::prefix('sting')->group(function ()
{

    ////////Site Sting
    Route::get('Sting/Site',[SttingController::class,'StingSite'])->name('StingSite');
    Route::put('Sting/Site_update/{id}',[SttingController::class,'StingSiteUpdate'])->name('StingSiteUpdate');
    ////////Seo Sting
    Route::get('Sting/Seo',[SeoController::class,'StingSeo'])->name('StingSeo');
    Route::put('Sting/Seo_update/{id}',[SeoController::class,'StingSeoUpdate'])->name('StingSeoUpdate');
});


Route::prefix('search')->group(function ()
{
   Route::post('product_search',[\App\Http\Controllers\frontend\indexController::class,'product_search'])->name('product_search');
   Route::post('/search_Products',[\App\Http\Controllers\frontend\indexController::class,'searchProducts']);

});



///////////////permissionRoute
Route::prefix('permission')->group(function ()
{
    Route::get('permission/index',[RoleController::class,'permission_index'])->name('IndexPermission');
    Route::get('permission/create',[RoleController::class,'permission_create'])->name('CreatePermission');
    Route::get('permission/edit/{permission}',[RoleController::class,'permission_edit'])->name('ُEditPermission');
    Route::post('permission/store',[RoleController::class,'permission_store'])->name('ُStorePermission');
    Route::PUT('permission/{id}/update',[RoleController::class,'permission_update'])->name('ُUpdatePermission');
    Route::get('permission/{permission}/destroy',[RoleController::class,'permission_destroy'])->name('ُDestroyPermission');
});
///////////////RoleRoute
Route::prefix('role')->group(function ()
{
    Route::get('role/index',[RoleController::class,'role_index'])->name('IndexRole');
    Route::get('role/create',[RoleController::class,'role_create'])->name('CreateRole');
    Route::get('role/edit/{role}',[RoleController::class,'role_edit'])->name('ُEditRole');
    Route::post('role/store',[RoleController::class,'role_store'])->name('ُStoreRole');
    Route::PUT('role/{id}/update',[RoleController::class,'role_update'])->name('ُUpdateRole');
    Route::get('role/{role}/destroy',[RoleController::class,'role_destroy'])->name('ُDestroyRole');

    ////////////////////Permission Role Route PRR

    Route::get('RollPermission/create',[RoleController::class,'roll_permission_create'])->name('rollPermissionCreate');
    Route::post('RollPermission/store',[RoleController::class,'roll_permission_store'])->name('rollPermissionStore');
    Route::get('RollPermission/index',[RoleController::class,'roll_permission_index'])->name('rollPermissionIndex');
    Route::get('RollPermission/edit/{id}',[RoleController::class,'roll_permission_edit'])->name('rollPermissionEdit');
    Route::get('RollPermission/update/{id}',[RoleController::class,'roll_permission_update'])->name('rollPermissionUpdate');
    Route::get('RollPermission/destroy/{id}',[RoleController::class,'roll_permission_destroy'])->name('rollPermissionِDestroy');


});
////////////////Basket
Route::prefix('basket')->group(function ()
{

    Route::get('add/basket/{pro}',[\App\Http\Controllers\frontend\BasketController::class,'add'])->name('add.basket');
    Route::get('index/basket', [\App\Http\Controllers\frontend\BasketController::class, 'index'])->name('index.basket');
    Route::put('update/{id}/basket', [\App\Http\Controllers\frontend\BasketController::class, 'update'])->name('updateBasket');
    Route::get('clear/basket', function () {
        resolve(StorageInterFace::class)->clear();
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('checkOut/basket', [\App\Http\Controllers\frontend\BasketController::class, 'checkOutForm'])->name('checkOut.basket.form');
        Route::post('checkOut/basket', [\App\Http\Controllers\frontend\BasketController::class, 'checkOut'])->name('checkOut.basket');
    });

});
Route::post('payment/{gateway}/callback', [\App\Http\Controllers\frontend\paymentController::class, 'verify'])->name('payment.verify');


