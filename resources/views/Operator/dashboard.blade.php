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
                            <tr>
                                <td>{{ $dt->user->name }}</td>
                                <td>{{ $dt->tahun_lulus }}</td>
                                <td>{{ $dt->jurusan->jurusan }}</td>
                                <td><a href="https://www.instagram.com/{{ $dt->sosial_media }}">{{ $dt->sosial_media }}</a>
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Aksi">
                                        <form action="{{ route('Operator.ganti-status', $dt->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success"
                                                style="margin-right: 5px;">Accept</button>
                                        </form>
                                        <form action="{{ route('Operator.destroy-data', $dt->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                style="margin-right: 5px;">Reject</button>
                                        </form>
                                        <a href="#" class=" btn btn-warning" data-toggle="modal"
                                            data-target="#Medium-modal" type="submit">Detail
                                        </a>
                                        <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Detail Data</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul class="profile-edit-list row">
                                                            <li class="weight-500 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Full Name</label>
                                                                    <p>{{ $dt->user->name }}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jenis Kelamin</label>
                                                                    <p>{{ $dt->jenis_kelamin }}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal Lahir</label>
                                                                    <p>{{ $dt->tanggal_lahir }}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Sosial Media</label> <br>
                                                                    <a
                                                                        href="https://www.instagram.com/{{ $dt->sosial_media }}"><i
                                                                            class="fa fa-instagram m-1"></i>{{ $dt->sosial_media }}</a>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Alamat</label>
                                                                    <p>{{ $dt->alamat }}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jenjang Karir</label>
                                                                    <p>{{ $dt->jenjang_karir->jenjang_karir }}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>State/Province/Region</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Postal Code</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Phone Number</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <textarea class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Visa Card Number</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Paypal ID</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-checkbox mb-5">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="customCheck1-1">
                                                                        <label class="custom-control-label weight-400"
                                                                            for="customCheck1-1">I agree to receive
                                                                            notification
                                                                            emails</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <input type="submit" class="btn btn-primary"
                                                                        value="Update Information">
                                                                </div>
                                                            </li>
                                                            <li class="weight-500 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Jurusan</label>
                                                                    <p>{{ $dt->jurusan->jurusan }}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tahun Lulus</label>
                                                                    <p>{{ $dt->tahun_lulus }}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Linkedin URL:</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text" placeholder="Paste your link here">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Instagram URL:</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text" placeholder="Paste your link here">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Dribbble URL:</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text" placeholder="Paste your link here">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Dropbox URL:</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text" placeholder="Paste your link here">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Google-plus URL:</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text" placeholder="Paste your link here">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Pinterest URL:</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text" placeholder="Paste your link here">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Skype URL:</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text" placeholder="Paste your link here">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Vine URL:</label>
                                                                    <input class="form-control form-control-lg"
                                                                        type="text" placeholder="Paste your link here">
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <input type="submit" class="btn btn-primary"
                                                                        value="Save & Update">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
