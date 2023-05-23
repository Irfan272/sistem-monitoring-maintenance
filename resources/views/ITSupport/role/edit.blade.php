@extends('ITSupport.layout.master')

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data Role</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="/IT/role/update/{{$roles->id}}" method="POST">                           
                            <div class="row">
                                @csrf
                                @method('PATCH')
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Role</label>
                                        <input type="text" id="nama_role" class="form-control"
                                            placeholder="Nama Role" name="nama_role" value="{{$roles->nama_role}}">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Deskripsi</label>
                                        <textarea type="text" id="keterangan" class="form-control"
                                            placeholder="Tuliskan Deksripsi Divisi" name="keterangan">{{$roles->keterangan}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <a href="/IT/role/" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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