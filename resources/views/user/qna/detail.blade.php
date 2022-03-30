@extends('layouts.user')

@section('title', 'List Peraturan')

@section('breadcrumb-link')
    <li class="breadcrumb-item"><a href="/user">Home</a></li>
    <li class="breadcrumb-item active">QnA</li>
    <li class="breadcrumb-item active">Detail Data</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detail QnA</h5>
                <!-- Horizontal Form -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Nama Peraturan</label>
                            <label class="col-sm-9 col-form-label">{{ $data->title }}</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label fw-bold">Tentang</label>
                            <label class="col-sm-9 col-form-label">{{ $data->body }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
