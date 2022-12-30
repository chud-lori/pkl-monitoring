<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit pembimbing</title>
</head>
<body>
    <form action="{{ route('pembimbing.updatepembimbing') }}" method="post">
        @csrf
        <span>Email</span>
        <input type="text" name="email" value="{{ $user->email }}" id="">
        <br>
        <span>Nama</span>
        <input type="text" name="nama" value="{{ $user->nama }}" id="">
        <br>
        <span>Password</span>
        <input type="password" name="password" id="">
        <br>
        <span>NIP</span>
        <input type="text" name="nip" value="{{ $user->nip }}" id="">
        <br>
        <input type="submit" value="Sunting">
    </form>
</body>
</html>
