<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid black">
        <thead>
            <tr>
                <td>id</td>
                <td>kode barang</td>
                <td>nama barang</td>
                <td>gambar barang</td>
                <td>stok</td>
                <td>jenis</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @if (isset($items))
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->kode_barang}}</td>
                        <td>{{$item->nama_barang}}</td>
                        <td>{{$item->gambar_barang}}</td>
                        <td>{{$item->stok->total}}</td>
                        <td>{{$item->stok->jenis}}</td>
                        <td>
                            <a href="edit">edit</a></td>
                            <a href="delete">delete</a></td>
                    </tr>
                @endforeach
            @endif
            @else
            <tr>
                <td colspan="6">no data</td>
            </tr> 
        </tbody>
    </table>
</body>
</html>