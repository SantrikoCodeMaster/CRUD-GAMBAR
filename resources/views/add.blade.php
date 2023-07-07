{{-- @extends('notif')

@section('content') --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko-Tambah</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset("vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset("css/sb-admin-2.min.css")}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset("vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Toko Serba Ada</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dasboard</span></a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="/mk">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Barang</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <br>
            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Produk</h1>
                    <p class="mb-4"><a target="_blank"
                            href="https://datatables.net">Silahkan Tambah Produk Disini</a>.</p>

                    <!-- body -->
                    <form action="/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Ex: Nama Produk</div>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" id="harga_produk" name="harga_produk"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Ex: Harga Produk</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Masukkan Foto Produk</label>
                            <input type="file" class="form-control" id="foto" name="foto"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Ex: Foto Produk</div>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        {{-- <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Id Barang</label>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="id_barang">
                                <option selected>Open Drop Down</option>
                                @foreach ($matakuliah as $mk)
                                <option value="{{$mk->id}}">{{$mk->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>
                            <div id="emailHelp" class="form-text">Ex: matkul</div>
                        </div> --}}
                        <!-- end form text field -->
                        <!-- form text field -->
                        <!-- form text field -->
                        <!-- end form text field -->
                        {{-- <a href="{{ url('get-pesan') }}" class="btn btn-primary btn-sm">
                            Submit
                        </a> --}}
                        {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block" data-dismiss="alert"> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{-- <strong>{{ $message }}</strong>
                        </div> --}}
                        {{-- @endif --}}
                    </form>
                    {{-- <div class="alert alert-success" role="alert">
                        Tambah Data Telah Berhasil!!
                    </div> --}}
                    <!-- end body -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Untag Surabaya 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    {{-- @endsection --}}
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset("vendor/jquery-easing/jquery.easing.min.js")}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset("js/sb-admin-2.min.js")}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset("js/demo/datatables-demo.js")}}"></script>


</body>

</html>