@section('footer')
    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Админка сайта {{route('index')}}</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE -->
    <script src="{{asset('admin/plugins/dist/js/adminlte.js')}}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/plugins/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('admin/plugins/dist/js/pages/dashboard3.js')}}"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection
