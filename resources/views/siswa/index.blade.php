@extends('template_backend.home')
@section('sub-judul', 'Siswa')
@section('content')
<!-- <h1>Table Perpus</h1> -->
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
    @endif

    <a href="{{ route('siswa.create') }}" class="btn btn-info btn-sm">Tambah Buku</a>


    <table class="table table-striped table-hover table-sm table-boardered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($siswa as $result => $hasil)
                <tr>
                    <td>{{ $result + $siswa->firstitem() }}</td>
                    <td>{{ $hasil->kode }}</td>
                    <td>{{ $hasil->buku }}</td>
                    <td>{{ $hasil->tgl_pinjam }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    {{ $siswa->links() }}

@endsection