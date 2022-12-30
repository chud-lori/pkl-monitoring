<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>dashboard pembimbing</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{ route('pembimbing.addsiswa') }}">Tambah siswa</a>
    <a href="{{ route('pembimbing.adddudi') }}">Tambah dudi</a>

    <a href="{{ route('logout', ['role' => 'pembimbing']) }}">Logout</a>

</body>
</html>