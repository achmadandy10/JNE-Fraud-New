@extends('layouts.user')

@section('title', 'List Peraturan')

@section('breadcrumb-link')
    <li class="breadcrumb-item">Home</a></li>
    <li class="breadcrumb-item active">Database</li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Data</h5>
                <!-- Horizontal Form -->
                <form action="{{ route('database-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="submission_number" class="col-sm-6 col-form-label">Nama Peraturan</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="row mb-3">
                                <label for="first_party" class="col-sm-6 col-form-label">Tipe Peraturan</label>
                                <div class="col-sm-6">
                                    <select name="type" class="form-control" id="">
                                        <option value="Peraturan Menteri">Peraturan Menteri</option>
                                        <option value="Peraturan Negara">Peraturan Negara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="second_party" class="col-sm-6 col-form-label">Entitas</label>
                                <div class="col-sm-6">
                                    <input type="text" name="entity" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="third_party" class="col-sm-6 col-form-label">Nomor Peraturan</label>
                                <div class="col-sm-6">
                                    <input type="text" name="number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="agreement_draft" class="col-sm-6 col-form-label">Tahun Peraturan</label>
                                <div class="col-sm-6">
                                    <input type="text" name="year" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="addendum" class="col-sm-6 col-form-label">Tentang</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">Ditetapkan Tanggal</label>
                                <div class="col-sm-6">
                                    <input type="date" name="set_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">Diundangkan Tanggal</label>
                                <div class="col-sm-6">
                                    <input type="date" name="promulgated_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">Berlaku Tanggal</label>
                                <div class="col-sm-6">
                                    <input type="date" name="valid_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="assurance_goods" class="col-sm-6 col-form-label">Sumber</label>
                                <div class="col-sm-6">
                                    <input type="text" name="source" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="compensation" class="col-sm-6 col-form-label">Upload File</label>
                                <div class="col-sm-6">
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
