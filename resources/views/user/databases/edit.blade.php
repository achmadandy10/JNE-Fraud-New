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
                <form action="{{ route('database-update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Peraturan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                                </div>
                            </div>
                            {{-- <input type="hidden" name="id" value="{{ $id }}"> --}}
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Tipe Peraturan</label>
                                <div class="col-sm-9">
                                    <select name="type" class="form-select">
                                        <option value="{{ $data->type }}">{{ $data->type }} (tidak dirubah)</option>
                                        <option disabled>--------------------</option>
                                        <option value="Peraturan Menteri">Peraturan Menteri</option>
                                        <option value="Peraturan Negara">Peraturan Negara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Entitas</label>
                                <div class="col-sm-9">
                                    <input type="text" name="entity" class="form-control" value="{{ $data->entity }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nomor Peraturan</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ $data->number }}" name="number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Tahun Peraturan</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ $data->year }}" name="year" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Tentang</label>
                                <div class="col-sm-9">
                                    <textarea name="title" class="form-control" cols="30" rows="10">{{ $data->title }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Ditetapkan Tanggal</label>
                                <div class="col-sm-9">
                                    <input type="date" value="{{ $data->set_date }}" name="set_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Diundangkan Tanggal</label>
                                <div class="col-sm-9">
                                    <input type="date" value="{{ $data->promulgated_date }}" name="promulgated_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Berlaku Tanggal</label>
                                <div class="col-sm-9">
                                    <input type="date" value="{{ $data->valid_date }}" name="valid_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Sumber</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ $data->source }}" name="source" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-select">
                                        <option value="{{ $data->status }}">{{ $data->status }} (tidak dirubah)
                                        </option>
                                        <option disabled>--------------------</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">File</label>
                                <div class="col-sm-9">
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
