
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}">
<div class="page-heading">
 
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peralatan</th>
                            <th>Merk Peralatan</th>
                            <th>Divisi</th>
                            <th>Tahun Masuk</th>
                            <th>Batas Pemakaian</th>
                            <th>Kondisi</th>
               
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peralatan as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->nama_peralatan}}</td>
                            <td>{{$data->merk_peralatan}}</td>
                            <td>{{$data->divisi->nama_divisi}}</td>
                            <td>{{$data->tahun_pembuatan}}</td>
                            <td>{{$data->tahun_batas}}</td>
                            <td>{{$data->kondisi}}</td>
                          
    
                        </tr>
                        @endforeach

                        
                        
                    </tbody>
                </table>
            </div>
        </div>

    </section>


</div>
@endsection

