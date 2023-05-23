@extends('manager_MT.layout.master')

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Jadwal Perawatan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="/manager/perawatan/store" method="POST">
                            
                            <div class="row">
                                @csrf
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Judul</label>
                                        <input type="text" id="judul" class="form-control"
                                            placeholder="Judul" name="judul">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Peralatan</label>
                                        <select name="id_peralatan" id="id_peralatan" class="form-control">
                                            <option disabled value="">Pilih Peralatan</option>
                                            @foreach ($peralatan as $data)
                                                <option value="{{$data->id}}">{{$data->nama_peralatan}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Tanggal Pekerjaan</label>
                                        <input type="date" id="tanggal_pekerjaan" class="form-control"
                                            placeholder="Prioritas" name="tanggal_pekerjaan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" placeholder="Keterangan"
                                            name="keterangan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Nama Teknisi</label>
                                        <select name="id_teknisi" id="id_teknisi" class="form-control">
                                            <option disabled value="">Pilih Teknisi</option>
                                            @foreach ($user as $data)
                                                <option value="{{$data->id}}">{{$data->username}}</option>
                                             @endforeach
                                        </select>
                               
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
                                    <a href="/manager/perawatan/" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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