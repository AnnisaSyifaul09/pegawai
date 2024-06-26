@extends('layouts.app')

@section('title', 'Daftar Pegawai')

@section('content')
    <h1 class="mb-4 font-semibold" style="color: rgb(58, 58, 58);">Daftar Pegawai</h1>
    <a href="{{ route('pegawai.create') }}" class="btn btn-success mb-3 font-bold">Add New Pegawai</a>
    <a href="{{ route('home') }}" class="btn btn-outline-primary mb-3">Back</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->alamat }}</td>
                <td>
                    <a href="{{ route('pegawai.edit', $p->id) }}" class="btn btn-outline-info btn-sm d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square me-1" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706l-1.1 1.1a.5.5 0 0 1-.707 0l-1.1-1.1a.5.5 0 1 1 .707-.707l.647.646V1a.5.5 0 0 1 1 0v.586l.647-.646a.5.5 0 0 1 .707 0zm-3.604 2.623l.707.707L5.084 13.79H4v-1.086l7.898-7.898zM1 13.5V15h1.5l7.085-7.086-1.5-1.5L1 13.5z"/>
                        </svg>
                        Edit
                    </a>
                </td>
                <td>
                    <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Apakah ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash me-1" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2 0A.5.5 0 0 1 8 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2 0A.5.5 0 0 1 10 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9.5A1.5 1.5 0 0 1 11.5 15h-7A1.5 1.5 0 0 1 3 13.5V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1h3a1 1 0 0 1 1 1v1zm-11-1a.5.5 0 0 0-.5.5V4h10V2.5a.5.5 0 0 0-.5-.5h-9z"/>
                            </svg>
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
