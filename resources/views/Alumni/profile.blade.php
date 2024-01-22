@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Data Profile</h4>
                        <div class="form-group row justify-content-center">
                            <img src="{{ isset(auth()->user()->detail_alumni->foto) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? asset('storage/assets/foto/' . auth()->user()->detail_alumni->foto) : '' }}"
                                alt="{{ auth()->user()->name }}" class="w-25">
                        </div>
                        <div class="form-group row">
                            <label for="Nisn" class="col-sm-2 col-form-label">Nisn</label>
                            <div class="col-sm-9">
                                <label
                                    for="Nisn">{{ isset(auth()->user()->detail_alumni->nisn) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? auth()->user()->detail_alumni->nisn : 'Anda belum menambahkan untuk kolom ini' }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <label for="Nama">{{ auth()->user()->name }} </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="noTelp" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-9">
                                <label for="noTelp">{{ auth()->user()->no_telp }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputTanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <label
                                    for="tanggalLahir">{{ isset(auth()->user()->detail_alumni->tanggal_lahir) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? auth()->user()->detail_alumni->tanggal_lahir : 'Anda belum menambahkan untuk kolom ini' }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <label
                                    for="jenisKelamin">{{ isset(auth()->user()->detail_alumni->jenis_kelamin) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? auth()->user()->detail_alumni->jenis_kelamin : 'Anda belum menambahkan untuk kolom ini' }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <label
                                    for="alamat">{{ isset(auth()->user()->detail_alumni->alamat) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? auth()->user()->detail_alumni->alamat : 'Anda belum menambahkan untuk kolom ini' }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputSosialMedia" class="col-sm-2 col-form-label">Sosial Media</label>
                            <div class="col-sm-9">
                                @if (isset(auth()->user()->detail_alumni->sosial_media) && auth()->user()->detail_alumni->status == 'Diverifikasi')
                                    <a
                                        href="https://www.instagram.com/{{ isset(auth()->user()->detail_alumni->sosial_media) ? auth()->user()->detail_alumni->sosial_media : '' }}">{{ auth()->user()->detail_alumni->sosial_media }}</a>
                                @else
                                    <label for="sosialMedia">Anda belum menambahkan untuk kolom ini</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputJurusan" class="col-sm-2 col-form-label">jurusan</label>
                            <div class="col-sm-9">
                                <label
                                    for="jurusan">{{ isset(auth()->user()->detail_alumni->jurusan->jurusan) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? auth()->user()->detail_alumni->jurusan->jurusan : 'Anda belum menambahkan untuk kolom ini' }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputTahunLulus" class="col-sm-2 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-9">
                                <label
                                    for="tahunLulus">{{ isset(auth()->user()->detail_alumni->tahun_lulus) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? auth()->user()->detail_alumni->tahun_lulus : 'Anda belum menambahkan untuk kolom ini' }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputNoIjazah" class="col-sm-2 col-form-label">No Ijazah</label>
                            <div class="col-sm-9">
                                <label
                                    for="noIjazah">{{ isset(auth()->user()->detail_alumni->no_ijazah) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? auth()->user()->detail_alumni->no_ijazah : 'Anda belum menambahkan untuk kolom ini' }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputJenjangKarir" class="col-sm-2 col-form-label">Jenjang
                                Karir</label>
                            <div class="col-sm-9">
                                <label
                                    for="jenjangKarir">{{ isset(auth()->user()->detail_alumni->jenjang_karir->jenjang_karir) && auth()->user()->detail_alumni->status == 'Diverifikasi' ? auth()->user()->detail_alumni->jenjang_karir->jenjang_karir : 'Anda belum menambahkan untuk kolom ini' }}</label>
                            </div>
                        </div>
                        <a class="btn btn-primary me-2" href="{{ route('profile-edit') }}">Edit Biodata</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
