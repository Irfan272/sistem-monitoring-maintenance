@extends('manager_MT.layout.master')

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pengajuan Perbaikan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Judul</label>
                                        <input type="text" id="judul" class="form-control"
                                            placeholder="Judul" name="judul">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Mesin</label>
                                        <input type="text" id="mesin" class="form-control"
                                            placeholder="Mesin" name="mesin">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Nama User</label>
                                        <input type="text" id="nama_user" class="form-control" placeholder="Nama User"
                                            name="nama_user">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control"
                                            name="keterangan" placeholder="Keterangan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Prioritas</label>
                                        <input type="text" id="prioritas" class="form-control"
                                            name="prioritas" placeholder="Prioritas">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Lokasi</label>
                                        <input type="text" id="lokasi" class="form-control"
                                            name="lokasi" placeholder="Lokasi">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Tanggal Perkerjaan</label>
                                        <input type="date" id="tanggal_pekerjaan" class="form-control"
                                            name="tanggal_pekerjaan" placeholder="Tanggal Pekerjaan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Nama Teknisi</label>
                                        <input type="text" id="id_teknisi" class="form-control"
                                            name="id_teknisi" placeholder="Nama Teknisi">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Status</label>
                                        <input type="text" id="status" class="form-control"
                                            name="status" placeholder="Status">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <a href="/manager/perbaikan" class="btn btn-light-secondary me-1 mb-1">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection