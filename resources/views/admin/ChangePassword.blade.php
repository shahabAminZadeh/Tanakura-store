
@extends('admin.master.master')
@section('main_content')
    <div class="content-wrapper" style="min-height: 697.2px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>تغییر رمز</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">تغییر رمز</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8"><div class="card">
                            <div class="card card-primary">
                                <form method="post" action="{{route('AdminUpdatePassword')}}" >
                                    @csrf
                                    @if(session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('status')}}
                                        </div>
                                    @elseif(session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('error')}}
                                        </div>
                                    @endif

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="old_password">رمز </label>
                                            <input name="old_password"  type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password"  placeholder="پسورد را وارد کنید" >
                                            @error('old_password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="new_password"> رمز جدید</label>
                                            <input name="new_password"  type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password"  placeholder="پسورد جدید را وارد کنید" >
                                            @error('new_password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="new_password_confirmation">تکرار رمز جدید</label>
                                            <input name="new_password_confirmation"   type="password" class="form-control" id="new_password_confirmation"  placeholder="پسورد جدید را وارد کنید" >
                                            @error('new_password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <br>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"> ویرایش </button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div></div>
                </div>
            </div>
        </section>
    </div>


@endsection
