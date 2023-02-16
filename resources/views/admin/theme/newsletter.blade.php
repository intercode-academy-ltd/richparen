<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Category | WikiBlogger</title>
        @section('title') All Categories - {{ config('app.name', 'Laravel') }} @endsection
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="{{ asset('admin/sweetalert.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">NewsLetter Subscriber</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Manage NewsLetter Subscriber</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>NewsLetter Subscriber</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($newsletter as $newsletters)
                                        <tr>
                                            <td>{{ $newsletters['id'] }}</td>
                                            <td>{{ $newsletters['email'] }}</td>
                                            <td>
                                                @if($newsletters['status'] == 1)
                                                    <p><a href="#" class="text-success">Active</a></p>
                                                @else
                                                    <p><a href="#" class="text-danger">In Active</a></p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('newsletter.edit', $newsletters['id'] ) }}"><i class="fas fa-edit"></i></a>&nbsp;

                                                <a href="javascript:" class="btn btn-danger btn-sm deleteRecord" rel="{{ $newsletters['id'] }}" rel1="delete-category">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>NewsLetter Subscriber</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.layouts.footer')
</div>

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- Sweet Alert JS -->
<script src="{{ asset('admin/jquery.sweet-alert.custom.js') }}"></script>
<script src="{{ asset('admin/sweetalert.min.js') }}"></script>


<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


<!-- Datatable JS -->
<script src="{{ asset('admin/plugins/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/js/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $('body').on('click', '.deleteRecord', function (event) {
        event.preventDefault();
        var SITEURL = '{{ URL::to('') }}';
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
                title: "Are You Sure? ",
                text: "You will not be able to recover this record again",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Delete it!"
            },
            function () {
                window.location.href =  SITEURL + "/admin/" + deleteFunction + "/" + id;
            });
    });
</script>
</body>
</html>


