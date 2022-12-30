<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah siswa</title>
</head>
<body>
    <form action="{{ route('pembimbing.storesiswa') }}" method="post">
        @csrf
        <span>Email</span>
        <input type="text" name="email" id="">
        <br>
        <span>Nama</span>
        <input type="text" name="nama" id="">
        <br>
        <span>Nisn</span>
        <input type="text" name="nisn" id="">
        <br>
        <span>Password</span>
        <input type="password" name="password" disabled placeholder="Menggunakan nisn by default" id="">
        <br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
