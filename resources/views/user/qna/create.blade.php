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
                <form action="{{ route('qna-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Peraturan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Tentang</label>
                                <div class="col-sm-9">
                                    <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
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
