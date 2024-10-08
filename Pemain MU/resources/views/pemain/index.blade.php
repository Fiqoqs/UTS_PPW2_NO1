<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemain</title>
</head>
<body>
    <thead>
            <tr>
                <th>id</th>
                <th>nama_pemain</th>
                <th>nomor_punggung</th>
                <th>posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
                <tr>
                    <div>
                        <td>{{ $buku->id}}</td>
                        <td id="baris-1{{ $buku->id }}">{{ $pemain->judul }}</td>
                        <td id="baris-2{{ $buku->id }}">{{ $pemain->penulis }}</td>
                        <td id="baris-3{{ $buku->id }}">{{ $pemain->nomor_punggung}}</td>
                    </div>
                </tr>
        </tbody>
    </body>
</html>