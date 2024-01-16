<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\Detail_alumni;
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
        $jurusan = Jurusan::all();
        return view('alumni.editProfile', compact('jurusan'));
    }

    public function edit_proses(Request $request, $userID, $detailAlumniID)
    {
        // return ($request);
        $user = User::find($userID);
        $detailAlumni = Detail_alumni::find($detailAlumniID);

        $user->update([
            'nama' => $request->input('nama'),
            'no_telp' => $request->input('noTelp'),
        ]);

        $detailAlumni->update([
            'nisn' => $request->input('nisn'),
            'tanggal_lahir' => $request->input('tanggalLahir'),
            'jenis_kelamin' => $request->input('jenisKelamin'),
            'alamat' => $request->input('alamat'),
            'id_jurusan' => $request->input('idJurusan'),
            'tahun_lulus' => $request->input('tahunLulus'),
            'no_ijazah' => $request->input('noIjazah'),
            'jenjang_karir' => $request->input('jenjangKarir'),
            'sosial_media' => $request->input('sosialMedia'),
        ]);

        $detailAlumni->foto = $request->hasFile('foto') ? time() . "_" . $request->file('foto')->getClientOriginalName() : $detailAlumni->foto;

        if ($request->hasFile('foto') && $detailAlumni->foto) {
            Storage::disk('public')->delete('assets/foto/' . $detailAlumni->foto);

            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('assets/foto', $nama_file, 'public');
            $detailAlumni->foto = $nama_file;
        }

        $user->save();
        $detailAlumni->save();

        return redirect()->route('profile');
    }
}
