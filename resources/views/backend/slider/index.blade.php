@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 style="margin: 15px;color: #4d4d4c">همه اسلایدها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی اسلایدها </th>
                <th>  موضوع اسلاید </th>
                <th>  متن اسلاید </th>
                <th> عکس اسلاید </th>
                <th> اقدامات </th>
            </tr>
            @foreach($sliders as $key=>$slider)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$slider->tittle}}</td>
                    <td>{{$slider->short_tittle}}</td>
                    <td ><img   src="{{(!empty($slider->image)) ? url('upload/backend/slider/'.$slider->image): url('upload/backend/slider/slider.jpg')}}" style="height: 100px;width: 100px" ></td>
                    <td class="d-flex">
                        <a href="{{route('SliderEdit',['slider'=>$slider->id])}}" style="margin-left: 10px"  class="btn btn-sm btn-info"> ویرایش </a>
                        <a id="delete" href="{{route('SliderDestroy',['slider'=>$slider->id])}}" style="background-color: #c71515;margin-right: 10px" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی اسلاید </td>
                <td>  موضوع اسلاید </td>
                <td> عکس اسلاید </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>




@endsection
