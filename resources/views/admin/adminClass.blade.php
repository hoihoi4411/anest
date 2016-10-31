@include('admin.common.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Khóa học
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Quản lý khóa học</a></li>
        </ol>
    </section>
    <style>
        img{
            width: 300px;
        }
    </style>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        <ul>
                            Xóa khóa học thành công
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Quản lý khóa học</h3>  <a href="{{url('./admincp/khoa-hoc/addnew')}}" class="btn btn-primary btn-xs">Thêm Khóa học mới</a>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Tên Môn</th>
                                <th>Img</th>
                                <th>Price</th>
                                <th>Mô tả</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as $class)
                                <tr>
                                    <td>{{$class->name}}</td>
                                    <td><img src="{{url('/uploads/images/'.$class->img)}}">
                                    </td>
                                    <td>{{ $class->price }}</td>
                                    <td>{!! $class->text !!}</td>
                                    <td>
                                        <a href="{{url('./admincp/khoa-hoc/edit/'.$class->id)}}" class="btn btn-primary btn-xs">Edit</a>
                                        <a href="{{url('./admincp/khoa-hoc/delete/'.$class->id)}}" class="btn btn-danger btn-xs">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Tên Môn</th>
                                <th>Img</th>
                                <th>Price</th>
                                <th>Mô tả</th>
                                <th>#</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>
</div>
@include('admin.common.footer')