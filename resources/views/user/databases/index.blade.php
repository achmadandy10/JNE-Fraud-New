@extends('layouts.user')

@section('title', 'List Peraturan')

@section('breadcrumb-link')
    <li class="breadcrumb-item"><a href="/user">Home</a></li>
    <li class="breadcrumb-item active">Database</li>
    <li class="breadcrumb-item active">List Peraturan</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">List Peraturan</h5>
                <!-- Horizontal Form -->
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('database-create') }}" class="btn btn-primary mb-3">
                            + Tambah Data Baru
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Peraturan</th>
                                        <th>Tentang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        })
    </script>
@endsection
