<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ url('/admin/js/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('/admin/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('/admin/js/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('/admin/js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/admin/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/admin/js/demo.js') }}"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
