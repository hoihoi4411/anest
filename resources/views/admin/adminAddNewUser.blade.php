@include('admin.common.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @if(isset($user))
                Chỉnh sửa thành viên {{$user->name}}
            @else
                Thêm thành viên
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
                            Thêm thành viên thành công
                        </ul>
                    </div>
                @endif
                    @if(isset($sucesss))
                        <div class="alert alert-success">
                                Chỉnh sửa thành công
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
                        <h3 class="box-title"> @if(isset($user))Thành viên {{$user->name}}@else Thêm thành viên @endif</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="  @if(isset($user)){{ url('/admincp/user/edit/'.$user->id) }}@else{{ url('/admincp/user/addnew') }}@endif">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend>  @if(isset($user))
                                        Chỉnh sửa thành viên {{$user->name}}
                                    @else
                                        Thêm thành viên
                                    @endif</legend>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>

                                    <div class="col-lg-10">
                                        <input type="email" class="form-control" name="email"
                                               @if(isset($user)) value='{{$user->email}}' @endif id="inputEmail"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Name</label>

                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="name" id="inputEmail"
                                               @if(isset($user)) value='{{$user->name}}' @endif
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>

                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" name="password" id="inputPassword"
                                               placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="col-lg-2 control-label">Phần quyền</label>

                                    <div class="col-lg-10">
                                        <select class="form-control" name="permission">
                                            <option value="2"
                                                    @if(isset($user) && $user->permission == 2) selected @endif>Thành
                                                viên
                                            </option>
                                            <option value="1"
                                                    @if(isset($user) && $user->permission == 1) selected @endif>Quản lý
                                            </option>

                                        </select>
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