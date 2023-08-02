
@extends('vendor.master.master')
@section('main_content')
    <div class="content-wrapper" style="min-height: 697.2px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>پروفایل</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">پروفایل کاربری</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6"><div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{(!empty($data->photo)) ? url('upload/vendor/image/'.$data->photo): url('upload/vendor/image/R.png')}}" alt="User profile picture">
                                </div>
                                <br>
                                <h3 class="profile-username text-center">{{$data->name}}</h3>
                                <br>
                                <p class="text-muted text-center">{{$data->role}}</p>
                                <br>
                                <p class="text-muted text-center">{{$data->email}}</p>
                                <br>
                            </div>
                            <!-- /.card-body -->
                        </div></div>
                    <div class="col-md-6"><div class="card">
                            <div class="card card-primary">
                                <form method="post" action="{{route('VendorProfileStore')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">نام</label>
                                            <input name="name" value=" {{$data->name}}" type="text" class="form-control" id="name"  placeholder="نام را وارد کنید" >
                                        </div>
                                        <div class="form-group">
                                            <label for="email">آدرس ایمیل</label>
                                            <input value=" {{$data->email}}" name="email" type="email" class="form-control" id="email"  placeholder="ایمیل را وارد کنید" >
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">تلفن</label>
                                            <input value=" {{$data->phone}}" type="text" class="form-control" name="phone" id="phone"  placeholder="تلفن را وارد کنید" >
                                        </div>
                                        <div class="form-group">
                                            <label for="address">آدرس</label>
                                            <br>
                                            <textarea name="address" id="address" rows="4" role="5"> {{$data->address}} </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">عکس</label>
                                            <input name="photo"  type="file" class="form-control" id="photo" >
                                        </div>
                                        <div class="text-center">
                                            <img id="ShowImageAdmin" class="profile-user-img img-fluid img-circle" src="{{(!empty($data->photo)) ? url('upload/vendor/image/'.$data->photo): url('upload/vendor/image/R.png')}}" alt="User profile picture">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"> ویرایش </button>
                                    </div>
                                </form>
                            </div>
                        </div></div>
                </div>
            </div>
        </section>
    </div>
@endsection
