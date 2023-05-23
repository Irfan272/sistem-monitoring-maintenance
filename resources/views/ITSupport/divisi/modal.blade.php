@extends('ITSupport.layout.master')

@section('content')
<div class="modal fade" id="divisiModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Data : Sipil</h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
           <form action="/IT/divisi/modal/{{$divis->id}}">
               <div class="modal-body">
                   <label>Nama Divisi </label>
                   <div class="form-group">
                       <input type="text" placeholder="Sipil"
                           class="form-control" value="{{$divis->nama_divisi}}" name="nama_divisi" id="nama_divisi" disabled>
                   </div>
                   <label>Keterangan: </label>
                   <div class="form-group">
                       <textarea type="text" placeholder="bertugas mengelola urusan lapangan"
                           class="form-control" name="keterangan" id="keterangan" disabled>{{$divis->keterangan}}</textarea>
                   </div>
                   
               </div>
             
           </form>
           <div class="modal-footer">
               <button type="button" class="btn btn-light-secondary"
                   data-bs-dismiss="modal">
                   <i class="bx bx-x d-block d-sm-none"></i>
                   <span class="d-none d-sm-block">Close</span>
               </button>
               {{-- <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                   <i class="bx bx-check d-block d-sm-none"></i>
                   <span class="d-none d-sm-block">Accept</span>
               </button> --}}
           </div>
        </div>
     
    </div>
</div>
</div>
@endsection

