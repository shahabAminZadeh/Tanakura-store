
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">داشبورد</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">محصولات</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">محصولات</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form wire:submit.prevent="create" action=""  >
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">name</label>
                                    <input wire:model="name" name="name" type="text" class="form-control" id="name" >
                                    @error('name')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">body</label>
                                    <input wire:model="body"  name="body" type="text" class="form-control" id="body" >
                                    @error('body')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="count">count</label>
                                    <input wire:model="count"  type="number" class="form-control" id="count" >
                                    @error('data.count')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <br>

                                <div>
                                    <select name="data.category_id" class="form-select" size="3" aria-label="size 3 select example">
                                        <option  selected> select category </option>
                                        @foreach(\App\Models\Category::all() as $cat)
                                            <option name="category_id" wire:model="category_id" value="{{$cat->id}}">{{$cat->title}}</option>
                                        @endforeach
                                        @error('category_id')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </select>
                                </div>
                                <br>

                                <div>
                                    <select name="shop_id" class="form-select" size="3" aria-label="size 3 select example">
                                        <option name="shop_id" selected> select shoping </option>
                                        @foreach(\App\Models\Shop::all() as $shop)
                                            <option wire:model="shop_id" value="{{$shop->id}}">{{$shop->name}}</option>
                                        @endforeach
                                        @error('shop_id')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <select  name="discount_id" class="form-select" size="3" aria-label="size 3 select example">
                                        <option selected> select discount </option>
                                        @foreach(\App\Models\Discount::all() as $dis)
                                            <option name="discount_id" wire:model="discount_id" value="{{$dis->id}}">{{$dis->name}}</option>
                                        @endforeach
                                        @error('discount_id')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </select>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="price">price</label>
                                    <input wire:model="price"  type="price" class="form-control" id="price" >
                                    @error('price')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">ارسال فایل</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="image" id="image">
                                            <label wire:model="image"  class="custom-file-label" for="image">انتخاب فایل</label>
                                            @error('data.image')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button wire:click="create" type="submit" class="btn btn-primary">ارسال</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">محصولات</h3>

                            <div class="card-tools">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۲</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>name </th>
                                    <th>image</th>
                                    <th>price</th>
                                    <th>body</th>
                                    <th>count</th>
                                    <th>super_product</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>۱.</td>
                                    <td>آپدیت نرم افزار</td>
                                    <td>آپدیت نرم افزار</td>
                                    <td>آپدیت نرم افزار</td>
                                    <td>آپدیت نرم افزار</td>
                                    <td>آپدیت نرم افزار</td>
                                    <td>آپدیت نرم افزار</td>
                                    <td><a class="btn btn-danger small">delete</a></td>
                                    <td><a class="btn btn-success small">update</a></td>
                                </tr>

                                </tbody></table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- Small boxes (Stat box) -->
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
