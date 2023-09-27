<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang Barang</title>
</head>
<body>

<div class="container">
    <h1>Data barang</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->id_supplier }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
