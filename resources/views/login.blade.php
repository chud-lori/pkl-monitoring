<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <span>Email</span>
        <input type="text" name="email" id="">
        <br>
        <span>Password</span>
        <input type="password" name="password" id="">
        <br>
        <br>
        <select name="role" id="">
            <option value="" hidden>Status</option>
                <option value="pembimbing">Pembimbing</option>
                <option value="dudi">Dudi</option>
                <option value="siswa">Siswa</option>
        </select>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>