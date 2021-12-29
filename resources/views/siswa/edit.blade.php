@extends('template_backend.home')
@section('sub-judul', 'Edit Siswa')
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

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
    
    @endif
    <form action="{{ route('siswa.update', ['id' => $siswa]) }}" method="POST">
	@csrf
    @method('POST')
        <div class="form-group">
            <label>Kode</label>
            <input type="text" class="form-control" name="kode" value="{{ $siswa->kode }}">
        </div>
        <div class="form-group">
            <label>Buku</label>
            <input type="text" class="form-control" name="buku" value="{{ $siswa->buku }}">
        </div>
        <div class="form-group">
            <label>Tanggal Pinjam</label>
            <input type="text" class="form-control" name="tgl_pinjam" value="{{ $siswa->tgl_pinjam }}">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Buku</button>
        </div>


@endsection