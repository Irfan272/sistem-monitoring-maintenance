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
                        <form class="form" action="/manager/perawatan/update/{{$perawatan->id}}" method="POST">
                            
                            <div class="row">
                                @csrf
                                @method('PATCH')
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Judul</label>
                                        <input type="text" id="judul" class="form-control"
                                            placeholder="Judul" name="judul" value="{{$perawatan->judul}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Peralatan</label>
                                        <select name="id_peralatan" id="id_peralatan" class="form-control">
                                            @foreach ($peralatan as $data)
                                            @if (old('id_peralatan', $perawatan->id_peralatan) == $data->id)
                                            <option value="{{$data->id}}" selected>{{$data->nama_peralatan}}</option>
                                            @endif
                                                <option value="{{$data->id}}">{{$data->nama_peralatan}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Tanggal Pekerjaan</label>
                                        <input type="date" id="tanggal_pekerjaan" class="form-control" value="{{$perawatan->tanggal_pekerjaan}}"
                                            placeholder="Prioritas" name="tanggal_pekerjaan" value="tanggal_pekerjaan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" placeholder="Keterangan"
                                            name="keterangan" value="{{$perawatan->keterangan}}" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Nama Teknisi</label>
                                        <select name="id_teknisi" id="id_teknisi" class="form-control">
                                                       {{-- <option disabled value="" value="{{$permintaan->id_user}}">Pilih Divisi</option> --}}
                                                       @foreach ($user as $data)
                                                       @if (old('id_user', $perawatan->id_user) == $data->id)
                                                            <option value="{{$data->id}}" selected>{{$data->username}}</option>
                                                       @else
                                                       <option value="{{$data->id}}">{{$data->username}}</option>
                                                       @endif
              
                                                        @endforeach
                                        </select>
                               
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Status</label>
                                        <input type="text" id="status" class="form-control"
                                            name="status" placeholder="Status" value="{{$perawatan->status}}">
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