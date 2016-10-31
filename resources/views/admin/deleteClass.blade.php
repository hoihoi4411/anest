@extends('admin.adminConfirm')
@section('title')
    Xóa khóa học {{$class->name}}
@endsection
@section('title_box')
    Xóa khóa học {{$class->name}}
@endsection
@section('content')
    <form action="{{url('/admincp/khoa-hoc/delete/'.$class->id)}}" method="post">
        {{ csrf_field() }}
        <h3>Xóa khóa học {{$class->name}}</h3>
        <input type="submit" class="btn btn-info" value="Quay lại" name="cancel">
        <input type="submit" value="Xóa Luôn" name="submit_delete" class="btn btn-warning">
    </form>

@endsection
