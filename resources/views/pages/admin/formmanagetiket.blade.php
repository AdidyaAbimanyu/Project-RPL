@extends('layouts.admin')
@section('content')
    <div class="bg-success-2 flex-fill d-flex flex-column p-4">
        <h2>Edit Tiket</h2>
        <form action="{{ route('manage-tiket.update', $tiket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_tiket" class="form-label">Nama Tiket</label>
                <input type="text" class="form-control" id="nama_tiket" name="nama_tiket" value="{{ $tiket->nama_tiket }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $tiket->harga }}">
            </div>
            <div class="mb-3">
                <label for="ketersediaan" class="form-label">Ketersediaan</label>
                <input type="text" class="form-control" id="ketersediaan" name="ketersediaan" value="{{ $tiket->ketersediaan }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
