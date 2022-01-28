@extends('layouts.user')

@section('title', 'Litigation Fraud')

@section('breadcrumb-link')
    <li class="breadcrumb-item"><a href="/user">Home</a></li>
    <li class="breadcrumb-item active">Litigation</li>
    <li class="breadcrumb-item active">Fraud</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Fraud</h5>
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
                                <label for="second_party" class="col-sm-6 col-form-label">Jenis Kasus</label>
                                <div class="col-sm-6">
                                    <select name="" id="" class="form-control">
                                        <option value="#">--Pilih--</option>
                                        <option value="">Penggelapan</option>
                                        <option value="">Pencurian</option>
                                        <option value="">Pemalsuan</option>
                                        <option value="">Penipuan</option>
                                        <option value="">Perusakan Barang</option>
                                        <option value="">Penganiayaan</option>
                                        <option value="">Konflik Kepentingan</option>
                                        <option value="">Suap</option>
                                        <option value="">Pemberian Ilegal</option>
                                        <option value="">Cybercrime</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="third_party" class="col-sm-6 col-form-label">Faktor Penyebab</label>
                                <div class="col-sm-6">
                                    <select name="" id="" class="form-control">
                                        <option value="#">--Pilih--</option>
                                        <option value="">Keserakahan</option>
                                        <option value="">Kesempatan</option>
                                        <option value="">Kebutuhan</option>
                                        <option value="">Tekanan</option>
                                        <option value="">Pembenaran</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="start_date" class="col-sm-6 col-form-label">Pelaku</label>
                                <div class="col-sm-6">
                                    <select name="" id="" class="form-control">
                                        <option value="#">--Pilih--</option>
                                        <option value="">Internal</option>
                                        <option value="">External</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">Unit/Departemen/Divisi</label>
                                <div class="col-sm-6">
                                    <input type="text" name="end_date" class="form-control" id="end_date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-sm-6 col-form-label">Total Kerugian</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="assurance_goods" class="col-sm-6 col-form-label">Tanggal Kejadian</label>
                                <div class="col-sm-6">
                                    <input type="date" name="assurance_goods" class="form-control" id="assurance_goods">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="compensation" class="col-sm-6 col-form-label">Tempat Kejadian</label>
                                <div class="col-sm-6">
                                    <input type="text" name="compensation" class="form-control" id="compensation">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="other_point" class="form-label">Kronologis singkat Kejadian :</label>
                        <textarea name="other_point" class="form-control" id="other_point" cols="30" rows="10"></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">Dokumen :</div>
                        <div class="col-md-10">
                            <div class="row mb-3">
                                <select name="" id="" class="form-control">
                                    <option value="#">--Pilih--</option>
                                    <option value="#">Kecurangan Laporan Keuangan</option>
                                    <option value="">Penyalahgunaan Aset</option>
                                    <option value="">Korupsi</option>
                                    <option value="">Kecurangan Berkaitan dengan Komputer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Alat Bukti :</div>
                        <div class="col-md-10">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Saksi 1</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Departemen/Unit</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Saksi 2</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Departemen/Unit</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Bukti Dokumen Surat</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Keterangan Pelaku</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Keterangan Saksi</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-6 col-form-label">Lain-lain</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Dokumentasi Barang Bukti</div>
                            <div class="col-md-5">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Dokumen Investigasi</div>
                            <div class="col-md-5">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Bukti Lainnya</div>
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
