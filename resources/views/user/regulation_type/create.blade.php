@extends('layouts.user')

@section('title', 'List Peraturan')

@section('breadcrumb-link')
    <li class="breadcrumb-item">Home</a></li>
    <li class="breadcrumb-item active">Regulasi</li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Data</h5>
                <!-- Horizontal Form -->
                <form action="{{ route('regulation-type-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Regulasi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Tipe Regulasi</label>
                                <div class="col-sm-9">
                                    <select name="type" id="" class="form-control">
                                        <option value="Regulasi Internal">Regulasi Internal</option>
                                        <option value="Regulasi Normatif">Regulasi Normatif</option>
                                    </select>
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
