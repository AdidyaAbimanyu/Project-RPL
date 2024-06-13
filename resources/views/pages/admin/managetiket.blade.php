@extends('layouts.admin')
@section('content')
    <div class="bg-success-2 flex-fill d-flex flex-column p-4">
        <h2>Manage Tiket</h2>
        <table class="table table-secondary table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Tiket</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Ketersediaan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($tiket as $t)
                    <tr>
                        <th scope="row">{{ $t->id }}</th>
                        <td>{{ $t->nama_tiket }}</td>
                        <td>{{ $t->harga }}</td>
                        <td>{{ $t->ketersediaan }}</td>
                        <td>
                            <a href="{{ route('manage-tiket.edit', $t->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('manage-tiket.destroy', $t->id) }}" class="btn btn-danger me-3" onclick="return confirm('Apakah anda ingin menghapus?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
