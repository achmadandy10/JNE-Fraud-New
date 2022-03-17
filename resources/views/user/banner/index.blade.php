@extends('layouts.user')

@section('title', 'Drafting Customer')

@section('breadcrumb-link')
    <li class="breadcrumb-item"><a href="/user">Home</a></li>
    <li class="breadcrumb-item active">Upload Banner</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Upload Banner</h5>
                <!-- Horizontal Form -->
                <form>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label for="submission_number" class="col-sm-6 col-form-label">Upload Banner Baru</label>
                                <div class="col-sm-6">
                                    <input type="file" name="submission_number" class="form-control"
                                        id="submission_number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form><!-- End Horizontal Form -->

            </div>
        </div>
    </div>
@endsection
