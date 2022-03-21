@extends('layouts.user')

@section('title', 'List Peraturan')

@section('breadcrumb-link')
    <li class="breadcrumb-item"><a href="/user">Home</a></li>
    <li class="breadcrumb-item active">Database</li>
    <li class="breadcrumb-item active">Detail Data</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detail Peraturan</h5>
                <!-- Horizontal Form -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Nama Peraturan</label>
                            <label class="col-sm-9 col-form-label">{{ $data->name }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Jenis</label>
                            <label class="col-sm-9 col-form-label">{{ $data->type }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Entitas</label>
                            <label class="col-sm-9 col-form-label">{{ $data->entity }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Nomor Peraturan</label>
                            <label class="col-sm-9 col-form-label">{{ $data->number }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Tahun Peraturan</label>
                            <label class="col-sm-9 col-form-label">{{ $data->year }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Tentang</label>
                            <label class="col-sm-9 col-form-label">{{ $data->title }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Ditetapkan Tanggal </label>
                            <label class="col-sm-9 col-form-label">{{ $data->set_date }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Diundangkan Tanggal</label>
                            <label class="col-sm-9 col-form-label">{{ $data->promulgated_date }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Berlaku Tanggal</label>
                            <label class="col-sm-9 col-form-label">{{ $data->valid_date }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Sumber</label>
                            <label class="col-sm-9 col-form-label">{{ $data->source }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Status</label>
                            <label class="col-sm-9 col-form-label">{{ $data->status }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">File-File Peraturan</h5>
                <!-- Horizontal Form -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <ul class="list-group list-group-flush">
                                <li class="col-md-12 list-group-item">{{ $data->file }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
