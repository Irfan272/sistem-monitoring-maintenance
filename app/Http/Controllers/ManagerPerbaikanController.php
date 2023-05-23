<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;
use App\Models\PengajuanPerbaikan;
use App\Models\User;


class ManagerPerbaikanController extends Controller
{
   
    
    public function index(){
        $permintaan = PengajuanPerbaikan::with('peralatan', 'user')->paginate(10);

        return view('manager_MT.perbaikan.index', compact('permintaan'));
    }


    public function create(){
        $permintaan = PengajuanPerbaikan::with('peralatan', 'user')->paginate(10);


        return view('manager_MT.perbaikan.create', compact('permintaan'));
    }

    public function edit($id){
        $permintaan = PengajuanPerbaikan::where('id',$id)->first();
        $peralatan = Peralatan::all();
        $user = User::all();
        return view('manager_MT.perbaikan.edit', compact('permintaan', 'peralatan', 'user'));
    } 

    public function update(Request $request, $id){
        // PengajuanPerbaikan::where('id', $id)->update([
        //     'nama_divisi' => $request->nama_divisi,
        //     'keterangan' => $request->keterangan
        // ]);

        $validasiData = $request->validate([
            'nama_divisi' => 'nullable|string|max:10',
            'keterangan' => 'nullable|string|max:50',

            'judul' => 'required|max:255',
            'id_peralatan' => 'required',
            'id_user' =>  'required',
            'keterangan' => 'required|max:255',
            'prioritas' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tanggal_pekerjaan' => 'required|max:255',
            'status' => 'nullable|max:50',
            'id_teknisi' => 'nullable|max:50',

        ]);
        PengajuanPerbaikan::where('id', $id)->update($validasiData);





        return redirect('manager/perbaikan');
    }

}
