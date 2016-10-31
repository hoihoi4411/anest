@include('admin.common.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Xem những tin nhắn phản hồi
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        <ul>
                            {{ session('status') }}
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Xem những tin nhắn phản hồi</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Tin nhắn</th>
                                <th>Gửi mail hồi đáp</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->text}}
                                    </td>
                                    <td><a href="{{url('./admincp/contact/edit/'.$contact->id)}}" class="btn btn-primary btn-xs">Gửi mail</a></td>
                                    <td> <a href="{{url('./admincp/contact/delete/'.$contact->id)}}" class="btn btn-danger btn-xs">Xóa ngay</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Email</th>
                                <th>Tin nhắn</th>
                                <th>Gửi mail hồi đáp</th>
                                <th>Xóa</th>
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