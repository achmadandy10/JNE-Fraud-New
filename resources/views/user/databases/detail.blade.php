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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <input type="text" name="date" value="{{ $data->type }}" class="form-control"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Entitas</label>
                                    <input type="text" name="title" value="{{ $data->entity }}" class="form-control"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor</label>
                                    <input type="text" name="title" value="{{ $data->number }}" class="form-control"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" name="author" value="{{ $data->year }}" class="form-control"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <textarea class="form-control" name="body" id="body" cols="5" rows="3" readonly>{{ $data->title }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ditetapkan Tanggal</label>
                                    <input type="text" name="title" value="{{ $data->set_date }}" class="form-control"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Diundangkan Tanggal</label>
                                    <input type="text" name="title" value="{{ $data->promulgated_date }}"
                                        class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Berlaku Tanggal</label>
                                    <input type="text" name="author" value="{{ $data->valid_date }}"
                                        class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sumber</label>
                                    <input type="text" name="title" value="{{ $data->source }}" class="form-control"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">File</label>
                                    <input type="text" name="author" value="{{ $data->file }}" class="form-control"
                                        readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
