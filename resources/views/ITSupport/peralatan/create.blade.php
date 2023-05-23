@extends('ITSupport.layout.master')

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Peralatan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="/IT/peralatan/store" method="POST" >
                            <div class="row">
                                @csrf
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Peralatan</label>
                                        <input type="text" id="nama_peralatan" class="form-control"
                                            placeholder="Nama Peralatan" name="nama_peralatan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Jenis Peralatan</label>
                                        <input type="text" id="jenis_peralatan" class="form-control"
                                            placeholder="Jenis Peralatan" name="jenis_peralatan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Merk Peralatan</label>
                                        <input type="text" id="merk_peralatan" class="form-control" placeholder="Merk"
                                            name="merk_peralatan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Produsen</label>
                                        <input type="text" id="produsen" class="form-control"
                                            name="produsen" placeholder="Produsen">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Nomor Seri</label>
                                        <input type="text" id="nomor_seri" class="form-control"
                                            name="nomor_seri" placeholder="Nomor Seri">
                                    </div>
                                </div> --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Divisi</label>
                                        <select name="id_divisi" id="id_divisi" class="form-control">
                                            <option disabled value="">Pilih Divisi</option>
                                            @foreach ($divisi as $data)
                                                <option value="{{$data->id}}">{{$data->nama_divisi}}</option>
                                             @endforeach
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Tahun Pembuatan</label>
                                        <input type="date" id="tahun_pembuatan" class="form-control"
                                            name="tahun_pembuatan" placeholder="Tahun Pembuatan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Tahun Batas Pemakaian</label>
                                        <input type="date" id="tahun_batas" class="form-control"
                                            name="tahun_batas" placeholder="Tahun Batas">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Kondisi</label>
                                        <input type="text" id="kondisi" class="form-control"
                                            name="kondisi" placeholder="Kondisi">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <a href="/IT/peralatan/" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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