<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Welcome to Your Profile</h2>
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    <p>You are logged in!</p>
    <p><a href="/signin">Logout</a></p>
</body>
</html>