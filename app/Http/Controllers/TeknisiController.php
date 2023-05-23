<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Peralatan;
use Illuminate\Http\Request;
use App\Models\PerawatanRutin;
use App\Models\PengajuanPerbaikan;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class TeknisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('Teknisi');
    }

    public function home(){
        return view('teknisi.dashboard');
    }

    public function indexPerawatan(){
        $perawatan = PerawatanRutin::with('peralatan', 'user')->paginate(10);

        return view('teknisi.perawatan.index', compact('perawatan'));
    }

    public function editPerawatan($id){
   
        $peralatan = Peralatan::all();
        $user = User::where('id_role', '1')->get();
        $perawatan = PerawatanRutin::where('id', $id)->first();

        return view('teknisi.perawatan.edit', compact('peralatan', 'user', 'perawatan'));
    }


    public function updatePerawatan(Request $request, $id){
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

        return redirect('/teknisi/perawatan');
    }

    public function indexPerbaikan(){
        $permintaan = PengajuanPerbaikan::with('peralatan', 'user')->paginate(10);
        return view('teknisi.perbaikan.index', compact('permintaan'));
    }

}
