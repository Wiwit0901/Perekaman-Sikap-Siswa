<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
     <table class="table table-bordered">
        <tr>
           
            <th>Kode Kejadian</th>
            <th>Nama</th>
            <th>Kode Kasus</th>
            <th>Nama Kasus</th>
            <th>Poin</th>
            <th>Tanggal</th>
            <th>Saksi</th>
            
        </tr>
        @foreach ($kejadians as $kejadian)
        <tr>
            
            <td>{{ $kejadian->kode_kejadian }}</td>
            <td>{{ $kejadian->nama }}</td>
            <td>{{ $kejadian->kode_kasus }}</td>
            <td>{{ $kejadian->nama_kasus }}</td>
            <td>{{ $kejadian->poin }}</td>
            <td>{{ $kejadian->tanggal }}</td>
            <td>{{ $kejadian->saksi }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
