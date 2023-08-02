
@extends('admin.master.master')
@section('main_content')
    <div class="content-wrapper" style="min-height: 697.2px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>تغییر وضعیت فروشنده</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item"><a href="#">فروشنده ها</a></li>
                            <li class="breadcrumb-item active">تغییر وضعیت قروشنده</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{(!empty($data->photo)) ? url('upload/vendor/image/'.$data->photo): url('upload/vendor/image/R.png')}}" alt="User profile picture">
                                </div>
                                <br>
                                <h3 class="profile-username text-center">{{$InActiveDetails->name}}</h3>
                                <br>
                                <p class="text-muted text-center">{{$InActiveDetails->role}}</p>
                                <br>
                                <p class="text-muted text-center">{{$InActiveDetails->email}}</p>
                                <br>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card card-primary">
                                <form method="POST" action="{{route('Vendor_Active_Approve')}}">
                                    @csrf
                                    <div class="card-body">
                                        <input type="hidden" name="id" value="{{$InActiveDetails->id}}" }}>
                                        <div class="form-group">
                                            <label for="name">نام</label>
                                            <input name="name" value=" {{$InActiveDetails->name}}" type="text" class="form-control" id="name"  placeholder="نام را وارد کنید" >
                                        </div>
                                        <div class="form-group">
                                            <label for="email">آدرس ایمیل</label>
                                            <input value=" {{$InActiveDetails->email}}" name="email" type="email" class="form-control" id="email"  placeholder="ایمیل را وارد کنید" >
                                        </div>
                                        <div class="form-group">
                                            <label for="status">آدرس ایمیل</label>
                                            <input value=" {{$InActiveDetails->status}}" name="status" type="text" class="form-control" id="status"  placeholder="وضعیت را وارد کنید" >
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">تلفن</label>
                                            <input value=" {{$InActiveDetails->phone}}" type="text" class="form-control" name="phone" id="phone"  placeholder="تلفن را وارد کنید" >
                                        </div>
                                        <div class="form-group">
                                            <label for="address">آدرس</label>
                                            <br>
                                            <textarea name="address" id="address" rows="4" role="5"> {{$InActiveDetails->address}} </textarea>
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
                                        <button type="submit" class="btn btn-danger" value="">فعال کردن فروشتده</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
