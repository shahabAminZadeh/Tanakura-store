@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ویرایش سئو</h4>
                <div class="card card-primary">
                    <form method="post" action="{{route('StingSeoUpdate',$seo->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="meta_title">meta_title</label>
                                <input name="meta_title" value="{{$seo->meta_title}}"  type="text" class="form-group" id="meta_title"  >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="meta_author">meta_author</label>
                                <input name="meta_author" value="{{$seo->meta_author}}"  type="text" class="form-group" id="meta_author"   >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="meta_keyword">meta_keyword</label>
                                <input name="meta_keyword" value="{{$seo->meta_keyword}}"  type="text" class="form-group" id="email"  >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="meta_description">فیسبووک</label>
                                <input name="meta_description" value="{{$seo->meta_description}}"  type="text" class="form-group" id="meta_description"  >
                            </div>
                            <br>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> update </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
