@extends('layouts.user')

@section('title', 'Drafting Lease')

@section('breadcrumb-link')
    <li class="breadcrumb-item"><a href="/user">Home</a></li>
    <li class="breadcrumb-item active">Drafting</li>
    <li class="breadcrumb-item active">Lease</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lease</h5>
                <!-- Horizontal Form -->
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="submission_number" class="col-sm-6 col-form-label">Nomor Pengajuan</label>
                                <div class="col-sm-6">
                                    <input type="text" name="submission_number" class="form-control"
                                        id="submission_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="first_party" class="col-sm-6 col-form-label">Pihak Pertama</label>
                                <div class="col-sm-6">
                                    <input type="text" name="first_party" class="form-control" id="first_party">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="second_party" class="col-sm-6 col-form-label">Pihak Kedua</label>
                                <div class="col-sm-6">
                                    <input type="text" name="second_party" class="form-control" id="second_party">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="third_party" class="col-sm-6 col-form-label">Pihak Ketiga (apa bila ada)</label>
                                <div class="col-sm-6">
                                    <input type="text" name="third_party" class="form-control" id="third_party">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="agreement_draft" class="col-sm-6 col-form-label">Draft Perjanjian</label>
                                <div class="col-sm-6">
                                    <input type="text" name="agreement_draft" class="form-control" id="agreement_draft">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="addendum" class="col-sm-6 col-form-label">Addendum</label>
                                <div class="col-sm-6">
                                    <input type="text" name="addendum" class="form-control" id="addendum">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="" class="col-sm-6 col-form-label">Nilai Sewa</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="x" class="col-sm-6 col-form-label">Alamat Objek Sewa</label>
                                <div class="col-sm-6">
                                    <input type="text" name="x" class="form-control" id="x">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="x" class="col-sm-6 col-form-label">Regional</label>
                                <div class="col-sm-6">
                                    <input type="text" name="x" class="form-control" id="x">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="start_date" class="col-sm-6 col-form-label">Tanggal Mulai Perjanjian</label>
                                <div class="col-sm-6">
                                    <input type="date" name="start_date" class="form-control" id="start_date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">Tanggal Berakhir Perjanjian</label>
                                <div class="col-sm-6">
                                    <input type="date" name="end_date" class="form-control" id="end_date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">Deposit</label>
                                <div class="col-sm-6">
                                    <input type="text" name="end_date" class="form-control" id="end_date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="assurance_goods" class="col-sm-6 col-form-label">Nominal Deposit</label>
                                <div class="col-sm-6">
                                    <input type="text" name="assurance_goods" class="form-control" id="assurance_goods">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="other_point" class="form-label">Poin-Poin Khusus Lainnya Yang Dicantumkan Dalam
                            Perjanjian Sesuai Kesepakatan Para Pihak:</label>
                        <textarea name="other_point" class="form-control" id="other_point" cols="30" rows="10"></textarea>
                    </div>

                    <div class="row mb-3">
                        <label for="assurance_goods" class="col-sm-6 col-form-label">Tipe Landlord</label>
                        <div class="col-sm-6">
                            <input type="text" name="assurance_goods" class="form-control" id="assurance_goods">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">Dokumen :</div>
                        <div class="col-md-10">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Disposisi Persetujuan
                                    Direksi</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Internal Memo</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Kartu Identitas Pemilik Hak
                                    *</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Nomor Pokok Wajib Pajak Pemilik
                                    *</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Kartu Keluarga *</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Buku Nikah / Akta Nikah *</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">KTP Direksi **</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Akta Pendirian dan Perubahan
                                    Terakhir **</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">SK Menkumham **</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Izin Usaha OSS **</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Nomor Induk Berusaha (NIB)
                                    **</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Nomor Pokok Wajib Pajak Perusahaan
                                    (NPWP) **</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Izin Lokasi OSS **</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Sertipikat / Girik</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Izin Mendirikan Bangunan</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="inputNumber" class="col-sm-6 col-form-label">SPPT & STTS (PBB)</label>
                                </div>
                                <div class="col-md-6 d-grid gap-3">
                                    <input class="form-control" type="file" id="formFile">
                                    <input class="form-control" type="file" id="formFile">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Asli Surat Kuasa</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Perjanjian Sewa Sebelumnya</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Surat Kuasa Direksi</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="d-grid col-md-6">
                                <span class="text-danger">* Jika Pemilik Perorangan</span>
                                <span class="text-danger">** Jika Pemilik Badan Hukum dan Badan Usaha</span>
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
