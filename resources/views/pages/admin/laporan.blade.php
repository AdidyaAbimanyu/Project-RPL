@extends('layouts.admin')
@section('content')
    <div class="bg-success-2 flex-fill d-flex flex-column p-4">
        <h2>Laporan Pengunjung</h2>

        <form class="mt-3" method="POST" action="{{ route('laporan.pengunjung.post') }}">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <div class="input-group">
                        <span class="input-group-text">From</span>
                        <input type="date" class="form-control" name="dateFrom" id="dateFrom" value="{{ old('dateFrom', $dateFrom ?? '') }}" />
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <span class="input-group-text">To</span>
                        <input type="date" class="form-control" name="dateTo" id="dateTo" value="{{ old('dateTo', $dateTo ?? '') }}">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="input-group">
                        <label for="groupBy" class="input-group-text">Group By</label>
                        <select class="form-select" id="groupBy" name="groupBy">
                            <option value="total" {{ old('groupBy', $groupBy ?? '') == 'total' ? 'selected' : '' }}>Total</option>
                            <option value="tahun" {{ old('groupBy', $groupBy ?? '') == 'tahun' ? 'selected' : '' }}>Tahun</option>
                            <option value="bulan" {{ old('groupBy', $groupBy ?? '') == 'bulan' ? 'selected' : '' }}>Bulan</option>
                            <option value="hari" {{ old('groupBy', $groupBy ?? '') == 'hari' ? 'selected' : '' }}>Hari</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <label for="orderBy" class="input-group-text">Order By</label>
                        <select class="form-select" id="orderBy" name="orderBy">
                            <option value="asc" {{ old('orderBy', $orderBy ?? '') == 'asc' ? 'selected' : '' }}>Ascending</option>
                            <option value="desc" {{ old('orderBy', $orderBy ?? '') == 'desc' ? 'selected' : '' }}>Descending</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </form>

        @if(isset($data))
            <form class="mt-3 d-flex justify-content-end" method="POST" action="{{ route('laporan.export') }}">
                @csrf
                <input type="hidden" name="dateFrom" value="{{ old('dateFrom', $dateFrom ?? '') }}">
                <input type="hidden" name="dateTo" value="{{ old('dateTo', $dateTo ?? '') }}">
                <input type="hidden" name="groupBy" value="{{ old('groupBy', $groupBy ?? '') }}">
                <input type="hidden" name="orderBy" value="{{ old('orderBy', $orderBy ?? '') }}">
                <button type="submit" class="btn btn-success px-4">Export Table</button>
            </form>
        @endif

        <table class="table table-secondary table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Periode</th>
                    <th scope="col">Jumlah Pengunjung Dewasa</th>
                    <th scope="col">Jumlah Pengunjung Anak</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @if(isset($data))
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->periode }}</td>
                            <td>{{ $item->total_dewasa }}</td>
                            <td>{{ $item->total_anak }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">No data available</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection