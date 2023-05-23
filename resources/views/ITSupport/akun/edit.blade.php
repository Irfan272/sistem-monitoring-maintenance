@extends('ITSupport.layout.master')

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">EditData Akun</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="/IT/akun/update/{{$akun->id}}" method="POST">
                            <div class="row">
                                @csrf
                                @method('PATCH')
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Username</label>
                                        <input type="text" id="username" class="form-control"
                                            placeholder="Username" name="username" value="{{$akun->username}}" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Nama Lengkap</label>
                                        <input type="text" id="nama_lengkap" class="form-control"
                                            placeholder="Nama Lengkap" name="nama_lengkap" value="{{$akun->nama_lengkap}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Email</label>
                                        <input type="email" id="email" class="form-control"
                                            name="email" placeholder="Email" value="{{$akun->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="Password"
                                            name="password" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" class="form-control"
                                            name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$akun->tanggal_lahir}}">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Tempat Lahir</label>
                                        <input type="text" id="tempat_lahir" class="form-control"
                                            name="tempat_lahir" placeholder="Tempat Lahir">
                                    </div>
                                </div> --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"  >
                                            <option disabled value="">Pilih Jenis Kelamin</option>
                                            <option value="{{$akun->jenis_kelamin}}">{{$akun->jenis_kelamin}}</option>
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        </select>
                                      
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Alamat</label>
                                        <input type="text" id="alamat" class="form-control"
                                            name="alamat" placeholder="Alamat" value="{{$akun->alamat}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Nomor Telepon</label>
                                        <input type="text" id="no_telpon" class="form-control"
                                            name="no_telpon" placeholder="Nomor Telepon" value="{{$akun->no_telpon}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Jabatan</label>
                                        <input type="text" id="jabatan" class="form-control"
                                            name="jabatan" placeholder="Jabatan" value="{{$akun->jabatan}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Divisi</label>
                                        <select name="id_divisi" id="id_divisi" class="form-control">
                                            <option disabled value="" value="{{$akun->username}}">Pilih Divisi</option>
                                            @foreach ($divisi as $data)
                                                <option value="{{$data->id}}">{{$data->nama_divisi}}</option>
                                             @endforeach
                                        </select>
                                 </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Role</label>
                                        <select name="id_role" id="id_role" class="form-control"value="{{$akun->id_role}}">
                                            @foreach ($role as $data)
                                                <option value="{{$data->id}}">{{$data->nama_role}}</option>
                                            @endforeach
                                        </select>
                                     
                                    </div>
                                </div>
                              
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <a href="/IT/akun/" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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