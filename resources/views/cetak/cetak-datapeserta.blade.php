<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 5px;
        }
        th {
            padding: 5px;
            background: whitesmoke;
        }
    </style>

    <center><br>
    <h2>Laporan Data Peserta</h2>
<br><br>

    <table border="1">
    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>no pendaftaran</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>jurusan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach($dataPeserta as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->no_pendaftaran }}</td>
                                            <td>{{ $data->agama }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->jurusan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
    </table>
    </center>
</body>
</html>