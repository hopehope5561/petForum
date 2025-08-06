<!DOCTYPE html>
<html>
<head>
    <title>Admin Giriş</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h2>Admin Panel Girişi</h2>

    @if (session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('admin.login.post') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Şifre:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Giriş</button>
    </form>
</body>
</html>
