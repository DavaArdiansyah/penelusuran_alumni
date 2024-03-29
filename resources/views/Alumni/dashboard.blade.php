@extends('layouts.main')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Data Alumni SMKN 11 Bandung</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Alumni</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <!-- Simple Datatable start -->
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Alumni</h4>
                <p class="mb-0">JIka data tidak muncul gunakan fitur pencarian</a></p>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Nama</th>
                            <th>TH Lulus</th>
                            <th>Jurusan</th>
                            <th>Sosial Media</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <td>{{ $dt->user->name }}</td>
                            <td>{{ $dt->tahun_lulus }}</td>
                            <td>{{ $dt->jurusan->jurusan }}</td>
                            <td><a href="https://www.instagram.com/{{ $dt->sosial_media }}"><i
                                        class="fa fa-instagram m-1"></i>{{ $dt->sosial_media }}</a></td>
                            <td>
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>
                                    Lihat Detail</a>
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
