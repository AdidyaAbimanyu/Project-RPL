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
                            <a href="#" class="btn btn-danger me-3">Delete</a>
                            <a href="#" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
