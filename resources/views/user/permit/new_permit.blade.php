@extends('layouts.user')

@section('title', 'Perizinan Baru')

@section('breadcrumb-link')
    <li class="breadcrumb-item"><a href="/user">Home</a></li>
    <li class="breadcrumb-item active">Permit</li>
    <li class="breadcrumb-item active">Perizinan Baru</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Perizinan Baru</h5>
                <!-- Horizontal Form -->
                <form>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label for="submission_number" class="col-sm-4 col-form-label">Tipe Perizinan</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control">
                                        <option value="#">--Pilih--</option>
                                        <option value="">Perizinan Reklame</option>
                                        <option value="">Perizinan IMB</option>
                                        <option value="">Perizinan SLF</option>
                                        <option value="">Perizinan TDG</option>
                                        <option value="">OSS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="first_party" class="col-sm-4 col-form-label">Lokasi</label>
                                <div class="col-sm-8">
                                    <input type="text" name="first_party" class="form-control" id="first_party">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="second_party" class="col-sm-4 col-form-label">Spesifikasi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="third_party" class="col-sm-4 col-form-label">Alasan Permohonan</label>
                                <div class="col-sm-8">
                                    <textarea name="other_point" class="form-control" id="other_point" cols="10" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">Dokumen Pendukung</div>
                        <div class="row mb-3 mt-4">
                            <div class="col-md-4">Disposisi</div>
                            <div class="col-md-5">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Dokumen 1</div>
                            <div class="col-md-5">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Dokumen 2</div>
                            <div class="col-md-5">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Dokumen 3</div>
                            <div class="col-md-5">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- End Horizontal Form -->

            </div>
        </div>
    </div>
@endsection
