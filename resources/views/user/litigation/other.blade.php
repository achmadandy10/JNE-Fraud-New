@extends('layouts.user')

@section('title', 'Litigation Other')

@section('breadcrumb-link')
    <li class="breadcrumb-item"><a href="/user">Home</a></li>
    <li class="breadcrumb-item active">Litigation</li>
    <li class="breadcrumb-item active">Other</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Other</h5>
                <!-- Horizontal Form -->
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="submission_number" class="col-sm-6 col-form-label">Nomor Kasus</label>
                                <div class="col-sm-6">
                                    <input type="text" name="submission_number" class="form-control"
                                        id="submission_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="first_party" class="col-sm-6 col-form-label">Tanggal</label>
                                <div class="col-sm-6">
                                    <input type="text" name="first_party" class="form-control" id="first_party">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="second_party" class="col-sm-6 col-form-label">Nama Pihak</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="third_party" class="col-sm-6 col-form-label">Unit/Departemen/Divisi</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="start_date" class="col-sm-6 col-form-label">Nomor Dokumen</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">Total Kerugian/Perkara</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="other_point" class="form-label">Kronologis singkat Kejadian :</label>
                        <textarea name="other_point" class="form-control" id="other_point" cols="30" rows="10"></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">Bukti :</div>
                        <div class="col-md-10">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Dokumen</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Bukti 1</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Bukti 2</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Bukti 3</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Disposisi</div>
                            <div class="col-md-5">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Dokumen Lainnya</div>
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
