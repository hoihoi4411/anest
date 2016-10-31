@extends('admin.adminConfirm')
@section('title')
    Xóa thành viên {{$user->name}}
@endsection
@section('title_box')
    Xóa thành viên {{$user->name}}
@endsection
@section('content')
    <form action="{{url('/admincp/user/delete/'.$user->id)}}" method="post">
        {{ csrf_field() }}
       <h3>Xóa thành viên {{$user->name}}</h3>
        <input type="submit" class="btn btn-info" value="Quay lại" name="cancel">
        <input type="submit" value="Xóa Luôn" name="submit_delete" class="btn btn-warning">
    </form>

@endsection
