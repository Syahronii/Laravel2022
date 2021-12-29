@extends('template_backend.home')
@section('sub-judul', 'Tambah Siswa')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
	@csrf
        <div class="form-group">
            <label>Kode</label>
            <input type="text" class="form-control" name="kode">
        </div>
        <div class="form-group">
            <label>Buku</label>
            <input type="text" class="form-control" name="buku">
        </div>
        <div class="form-group">
            <label>Tanggal Pinjam</label>
            <input type="text" class="form-control" name="tgl_pinjam">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Buku</button>
        </div>


@endsection