<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah dudi</title>
</head>
<body>
    <form action="{{ route('pembimbing.storedudi') }}" method="post">
        @csrf
        <span>Email</span>
        <input type="text" name="email" id="">
        <br>
        <span>Nama</span>
        <input type="text" name="nama" id="">
        <br>
        <span>Password</span>
        <input type="password" name="password" disabled placeholder="Menggunakan email by default" id="">
        <br>

        <select name="perusahaan_id" id="">
            <option value="" hidden>Perusahaan</option>
            @foreach ($perusahaans as $p)
            <option value="{{ $p->id }}"> {{ $p->nama }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
