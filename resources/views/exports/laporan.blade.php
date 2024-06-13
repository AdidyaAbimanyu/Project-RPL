<table>
    <thead>
        <tr>
            <th>Periode</th>
            <th>Jumlah Pengunjung Dewasa</th>
            <th>Jumlah Pengunjung Anak</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->periode }}</td>
                <td>{{ $item->total_dewasa }}</td>
                <td>{{ $item->total_anak }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
