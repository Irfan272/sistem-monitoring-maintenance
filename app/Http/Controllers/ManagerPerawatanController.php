<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use App\Models\PerawatanRutin;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerPerawatanController extends Controller
{
  

    public function index(){
        $perawatan = PerawatanRutin::with('peralatan', 'user')->paginate(10);

        return view('manager_MT.perawatan.index', compact('perawatan'));
    }

    public function create(){
        $peralatan = Peralatan::all();
        $user = User::where('role', 'Teknisi')->get();
        return view('manager_MT.perawatan.create', compact('peralatan', 'user'));
    }

    public function store(Request $request){
  

        $validasiData = $request->validate([
        

            'judul' => 'required|max:255',
            'id_peralatan' => 'required',            
            'keterangan' => 'required|max:255',
            'tanggal_pekerjaan' => 'required|max:255',
            'status' => 'required|max:50',
            'id_teknisi' => 'required',

        ]);
        PerawatanRutin::create($validasiData);

        // $validasiData = $request->validate([
        //     'nama_divisi' => 'required',
        //     'keterangan' => 'required',
        // ]);

        // Divisi::create($validasiData);

        return redirect('/manager/perawatan');
    }


    public function edit($id){
   
        $peralatan = Peralatan::all();
        $user = User::where('role', 'Teknisi')->get();
        $perawatan = PerawatanRutin::where('id', $id)->first();

        return view('manager_MT.perawatan.edit', compact('peralatan', 'user', 'perawatan'));
    }


    public function update(Request $request, $id){
        $validasiData = $request->validate([
        

            'judul' => 'required|max:255',
            'id_peralatan' => 'required',            
            'keterangan' => 'required|max:255',
            'tanggal_pekerjaan' => 'required|max:255',
            'status' => 'required|max:50',
            'id_teknisi' => 'required',

        ]);
        PerawatanRutin::where('id', $id)->update($validasiData);

        // $validasiData = $request->validate([
        //     'nama_divisi' => 'required',
        //     'keterangan' => 'required',
        // ]);

        // Divisi::create($validasiData);

        return redirect('/manager/perawatan');
    }

    public function cetakPerawatan(){
        return view('manager_MT.laporan.cetak-perawatan');
    }

    public function cetakPerawatanPertanggal($tanggal_awal, $tanggal_akhir){
        //dd(["Tanggal Awal : ".$tanggal_awal,"Tanggal Akhir : ".$tanggal_akhir]  );
        $cetakperawatan = PerawatanRutin::whereBetween('tanggal_pekerjaan', [$tanggal_awal, $tanggal_akhir])->get();
        return view('manager_MT.laporan.cetak-perawatan-pertanggal', compact('cetakperawatan'));
    }


}
