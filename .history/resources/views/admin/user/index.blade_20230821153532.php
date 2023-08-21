@extends('layouts.admin')
@section('module', 'User')
@section('action', ' - Manage')

@push('css')
    <link rel="stylesheet" href="{{ asset('adminAssets/plugins/datatables-bs4/css/dataTables.bootstrap4.min') }}'">
    <link rel="stylesheet" href="{{ asset('adminAssets/plugins/datatables-responsive/css/responsive.bootstrap4.min') }}'">
    <link rel="stylesheet" href="{{ asset('adminAssets/plugins/datatables-buttons/css/buttons.bootstrap4.min') }}'">
    <style>
        /* .dataTables_filter */

        .custom_table label {
            float: right;
            width: 60%;
            margin-bottom: 1rem;
        }

        .custom_table .pagination {
            float: right;
        }

        .custom_table .page-item.active .page-link {
            background-color: #00bc8c;
            border-color: #20c997;
        }

        .custom_table .page-link {
            color: #000000;
        }

        .table-btns {
            display: flex;
        }

        .table-img img {
            height: 100px;
            max-width: 100%;
            object-fit: contain;
        }
    </style>
@endpush

@section('content')

    <div class="custom_table">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Status</th>

                    <th>Creation Time</th>
                    <th>Update Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>{{ $admin->id }} </td>
                    <td>{{ $admin->name }} </td>
                    <td>{{ $admin->email }} </td>
                    <td>{{ $admin->phone }} </td>
                    <td>{{ $admin->address }} </td>
                    <td>{{ $admin->role == 1 ? 'User' : 'Admin' }} </td>

                    <td>{{ date('d/m/Y h:i:s', strtotime($admin->created_at)) }} </td>
                    <td>{{ isset($admin->updated_at) ? date('d/m/Y h:i:s', strtotime($admin->updated_at)) : 'Not update' }}
                    </td>
                    <td>
                        <div class="table-btns">
                            <a href="{{ route('admin.user.edit', ['id' => $admin->id]) }}" class="btn btn-edit">
                                <button type="button" class="btn btn-block btn-success">Edit</button>
                            </a>
                        </div>
                    </td>
                </tr>

                @foreach ($user as $item)
                    @if ($item->role != 0)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->id }} </td>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->email }} </td>
                            <td>{{ $item->phone }} </td>
                            <td>{{ $item->address }} </td>
                            <td>{{ $item->role == 1 ? 'User' : 'Admin' }} </td>

                            <td>{{ date('d/m/Y h:i:s', strtotime($item->created_at)) }} </td>
                            <td>{{ isset($item->updated_at) ? date('d/m/Y h:i:s', strtotime($item->updated_at)) : 'Not update' }}
                            </td>
                            <td>
                                <div class="table-btns">
                                    <a href="{{ route('admin.user.edit', ['id' => $item->id]) }}" class="btn btn-edit">
                                        <button type="button" class="btn btn-block btn-dark">Edit</button>
                                    </a>
                                    <a href="{{ route('admin.user.delete', ['id' => $item->id]) }}" class="btn btn-delete">
                                        <button type="button" class="btn btn-block btn-danger">Delete</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

@push('js')
    <script src="{{ asset('adminAssets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush

@push('jshand')
    <script type="text/javascript">
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
@endpush
