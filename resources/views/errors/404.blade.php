@extends('tanakoora.master.master')
@section('main_content')
    @section('title')
        404 . errors
    @endsection
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li>
                        <a href="{{url('/')}}">
                            خانه
                        </a>
                    </li>

                    <li class="active">خطا 404</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="error-area ptb-54">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>4 <span class="red">0</span> 4</h1>
                    <h3>صفحه مورد نظر یافت نشد</h3>
                    <p>صفحه ای که به دنبال آن هستید یافت نشد.</p>

                    <a href="{{url('/')}}" class="default-btn two">
                        بازگشت به خانه
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
