@include('admin.common.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <section class="content-header">
        <h1>
            @if(isset($class))
                Chỉnh sửa khóa học {{$class->name}}
            @else
                Thêm khóa học
            @endif

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Users Admincp</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(isset($successful) && $successful == 'sucess')
                    <div class="alert alert-success">
                        <ul>
                            Thêm khóa học thành công
                        </ul>
                    </div>
                @endif
                @if (session('statu'))
                    <div class="alert alert-success">
                        <ul>
                           Thêm khóa học thành công
                        </ul>
                    </div>
                @endif
                    @if (session('status'))
                        <div class="alert alert-success">
                            <ul>
                                chỉnh sửa khóa học thành công
                            </ul>
                        </div>
                    @endif
                @if(isset($error))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> @if(isset($class))Khóa học {{$class->name}}@else Thêm khóa học @endif</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                              action="  @if(isset($class)){{ url('/admincp/khoa-hoc/edit/'.$class->id) }}@else{{ url('/admincp/khoa-hoc/addnew') }}@endif">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Tên khóa học</label>

                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" required name="name" id="inputEmail"
                                               @if(isset($class)) value='{{$class->name}}' @endif
                                               placeholder="Nhập tên khóa học">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textArea" class="col-lg-2 control-label">Nhập nội dùng mô tả khóa
                                        học</label>

                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="editor1" required rows="3"
                                                  id="textArea"> @if(isset($class)) {{$class->text}} @endif</textarea>
                                        <span class="help-block">Nhập nội dung mô tả</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Giá tiền </label>

                                    <div class="col-lg-10">
                                        <input type="number" required  @if(isset($class)) value='{{$class->price}}' @endif class="form-control" name="price" id="inputEmail"
                                               placeholder="Nhập giá tiền">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="inputEmail" class="col-lg-2 control-label">Hình đại diện cho khóa
                                        học </label>

                                    <div class="col-lg-10">
                                        <img src="{{url('/uploads/images/'.$class->img)}}">
                                        <input type="file" required name="photo" id="js-upload-files" multiple="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
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
<script>
    CKEDITOR.replace('editor1');
</script>
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