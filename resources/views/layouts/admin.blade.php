<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HataDaNh Store | @yield('action') @yield('module', 'Dashboard') </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminAssets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminAssets/dist/css/adminlte.min.css') }}">
    @stack('css')
    <style>
        .logout a i {
            font-size: 24px;
            color: #ae1351;
            line-height: 42.5px;
            padding-left: 20px;
        }
        .logout a i:hover {
            color: #ff0066;
            transition: 0.5;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.blocks.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.blocks.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('module')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">@yield('module')</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@yield('module') @yield('action') </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">


                        @yield('content')



                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Welcome to the Admin admin page
                    </div>
                    <!-- /.card-footer-->
                </div>

                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>


        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Good Luck</b> 100%
            </div>
            <strong>Copyright &copy; 2020-2022 <a href="#">HataDaNh Store</a>.</strong> Group report.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="{{ asset('adminAssets/plugins/jquery/jquery.min.js ') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminAssets/plugins/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminAssets/dist/js/adminlte.min.js ') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminAssets/dist/js/demo.js ') }}"></script>

    <script src="https://kit.fontawesome.com/cee51eb4a2.js" crossorigin="anonymous"></script>
    @stack('js')
    @stack('jshand')
</body>

</html>
