<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\Cek_data_alumni;
use App\Models\Detail_alumni;
use App\Models\Jenjang_karir;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('alumni.profile');
    }

    public function edit()
    {
        if (auth()->user()->detail_alumni->status == 'Diverifikasi') {

            $jurusan = Jurusan::all();
            $jenjang_karir = Jenjang_karir::all();
            return view('alumni.editProfile', compact('jurusan', 'jenjang_karir'));
        } else {
            return redirect()->route('profile')->with('nanti pesan error');
        }
    }

    public function edit_proses(Request $request)
    {
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('assets/foto', $nama_file, 'public');
        } else {
            $nama_file = $request->input('namaFileLama');
        }

        $detail_alumni = Detail_alumni::create([
            'id_user' => auth()->user()->id,
            'nisn' => $request->input('nisn'),
            'tanggal_lahir' => $request->input('tanggalLahir'),
            'jenis_kelamin' => $request->input('jenisKelamin'),
            'alamat' => $request->input('alamat'),
            'id_jurusan' => $request->input('idJurusan'),
            'tahun_lulus' => $request->input('tahunLulus'),
            'no_ijazah' => $request->input('noIjazah'),
            'id_jenjang_karir' => $request->input('idJenjangKarir'),
            'sosial_media' => $request->input('sosialMedia'),
            'status' => 'Belum diverifikasi',
            'foto' => $nama_file,
        ]);

        $detail_alumni->save();
        return redirect()->route('profile');
    }
}
