<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<body>
    <h2>Signin</h2>
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif
    <form action="/signin" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="/signup">Sign up</a></p>
</body>
</html>
