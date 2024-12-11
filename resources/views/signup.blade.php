<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h2>Signup</h2>
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    <form action="/signup" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="/signin">Signin</a></p>
</body>
</html>
