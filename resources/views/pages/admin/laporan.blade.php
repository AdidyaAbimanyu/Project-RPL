@extends('layouts.admin')
@section('content')
    <div class="bg-success-2 flex-fill d-flex flex-column p-4">
        <h2>Laporan Pengunjung</h2>

        <form class="mt-3">
          <div class="row mb-3">
            <div class="col">
              <div class="input-group">
                <span class="input-group-text">From</span>
                <input type="date" class="form-control" id="dateFrom" />
              </div>
            </div>
            <div class="col">
              <div class="input-group">
                <span class="input-group-text">To</span>
                <input type="date" class="form-control" id="dateTo">
              </div>
            </div>
          </div>
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </form>

        <table class="table table-secondary table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Jumlah Pnegunjung Dewasa</th>
                    <th scope="col">Jumlah Pengunjung Anak</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
            </tbody>
        </table>
    </div>
@endsection
