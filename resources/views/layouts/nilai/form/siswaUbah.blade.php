<html lang="en">
<head>
    <mata charset="UTF-8",>
    <mata http-equiv="X-UA-Complatible" content="IE=edge",>
    <mata nama="viewport" content="width=devidth, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/nilai"> Kembali</a>
    <br>
    <br>

    @foreach($nilai as $j)
    <form action="/nilai/update" method="POST">
        {{ csrf_field() }}
        id_nilai <input type="text" name="id_nilai" value="{{ $j->id_nilai }}"><br>
        nis <input type="text" name="nis" value="{{ $j->nis }}"required><br>
        nama <input type="text" name="nama" value="{{ $j->nama }}"required><br>
        nilai <input type="text" name="nilai" value="{{ $j->nilai }}" required><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach

</body>
</html>
