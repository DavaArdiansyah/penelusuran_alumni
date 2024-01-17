@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-5">Data Profile</h4>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data"
                            action="{{ route('profile-edit-proses', auth()->user()->id) }}">
                            @csrf
                            @method('PUT')

                            {{-- <div class="form-group row justify-content-center">
                                <img src="https://th.bing.com/th?id=OIP.yYUwl3GDU07Q5J5ttyW9fQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                    alt="{{ auth()->user()->name }}" class="w-25">
                            </div> --}}
                            <div class="form-group row">
                                <label for="InputNisn" class="col-sm-2 col-form-label">Nisn</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nisn" id="nisn"
                                        placeholder="Masukan Nisn Anda"
                                        value="{{ isset(auth()->user()->detail_alumni->nisn) ? auth()->user()->detail_alumni->nisn : '' }}">
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="InputNama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Masukan Nama Anda" value="{{ auth()->user()->name }}">
                                </div>
                            </div> --}}
                            {{-- <div class="form-group row">
                                <label for="InputNoTelp" class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="noTelp" id="noTelp"
                                        placeholder="Masukan No Telepon Anda" value="{{ auth()->user()->no_telp }}">
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="InputTanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tanggalLahir" id="tanggalLahir"
                                        placeholder="Masukan Tanggal Lahir"
                                        value="{{ isset(auth()->user()->detail_alumni->tanggal_lahir) ? auth()->user()->detail_alumni->tanggal_lahir : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="InputJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select name="jenisKelamin" id="jenisKelamin" class="form-control">
                                        <option disabled hidden selected>Jenis Kelamin</option>
                                        <option value="Laki laki"
                                            {{ isset(auth()->user()->detail_alumni->jenis_kelamin) == 'Laki laki' ? 'selected' : '' }}>
                                            Laki laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ isset(auth()->user()->detail_alumni->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="InputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea name="alamat" id="alamat" cols="50" rows="2" placeholder="Masukan Alamat">{{ isset(auth()->user()->detail_alumni->alamat) ? auth()->user()->detail_alumni->alamat : '' }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="InputSosialMedia" class="col-sm-2 col-form-label">Sosial Media</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sosialMedia" id="sosialMedia"
                                        placeholder="Masukan Sosial Media"
                                        value="{{ isset(auth()->user()->detail_alumni->sosial_media) ? auth()->user()->detail_alumni->sosial_media : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="InputJurusan" class="col-sm-2 col-form-label">jurusan</label>
                                <div class="col-sm-9">
                                    <select name="idJurusan" id="idJurusan" class="form-control">
                                        <option disabled hidden selected>
                                            {{ !isset(auth()->user()->detail_alumni->id_jurusan) ? 'Jurusan' : '' }}
                                        </option>
                                        @foreach ($jurusan as $jrsn)
                                            <option value="{{ $jrsn->id }}"
                                                {{ isset(auth()->user()->detail_alumni->id_jurusan) && $jrsn->id == auth()->user()->detail_alumni->id_jurusan ? 'selected' : '' }}>
                                                {{ $jrsn->jurusan }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="InputTahunLulus" class="col-sm-2 col-form-label">Tahun Lulus</label>
                                <div class="col-sm-9">
                                    <input type="string" class="form-control" name="tahunLulus"
                                        id="tahunLulus"placeholder="Masukan Tahun Lulus"
                                        value="{{ isset(auth()->user()->detail_alumni->tahun_lulus) ? auth()->user()->detail_alumni->tahun_lulus : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="InputNoIjazah" class="col-sm-2 col-form-label">No Ijazah</label>
                                <div class="col-sm-9">
                                    <input type="string" class="form-control" name="noIjazah"
                                        id="noIjazah"placeholder="Masukan No Ijazah"
                                        value="{{ isset(auth()->user()->detail_alumni->no_ijazah) ? auth()->user()->detail_alumni->no_ijazah : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="InputJenjangKarir" class="col-sm-2 col-form-label">Jenjang
                                    Karir</label>
                                <div class="col-sm-9">
                                    <select name="jenjangKarir" id="jenjangKarir" class="form-control">
                                        <option disabled hidden selected>Jenjang Karir</option>
                                        <option value="Bekerja"
                                            {{ isset(auth()->user()->detail_alumni->jenjang_karir) == 'Bekerja' ? 'selected' : '' }}>
                                            Bekerja
                                        </option>
                                        <option value="Kuliah"
                                            {{ isset(auth()->user()->detail_alumni->jenjang_karir) == 'Kuliah' ? 'selected' : '' }}>
                                            Kuliah
                                        </option>
                                        <option value="Wirausaha"
                                            {{ isset(auth()->user()->detail_alumni->jenjang_karir) == 'Wirausaha' ? 'selected' : '' }}>
                                            Wirausaha
                                        </option>
                                        <option value="Belum Bekerja"
                                            {{ isset(auth()->user()->detail_alumni->jenjang_karir) == 'Belum Bekerja' ? 'selected' : '' }}>
                                            Belum Bekerja
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto">Foto:</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                                @if (isset(auth()->user()->detail_alumni))
                                    <label>File Sebelumnya:</label><br>
                                    <img src="{{ asset('storage/assets/foto/' . (isset(auth()->user()->detail_alumni->foto) ? auth()->user()->detail_alumni->foto : 'Anda belum menambahkan untuk kolom ini')) }}"
                                        alt="foto" width="150">
                                    <input type="hidden" name="namaFileLama"
                                        value="{{ isset(auth()->user()->detail_alumni->foto) ? auth()->user()->detail_alumni->foto : '' }}">
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
