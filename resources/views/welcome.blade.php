<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CERMAT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="text-center">
        <img src="{{ asset('images/logo_iscb.png') }}" alt="Logo" class="mb-4">
        <h1>Welcome to Digital Certificate Management System</h1>
        <p>Department of Information Security Certification Body</p>
        <a href="{{ route('login') }}" class="btn btn-primary m-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-success m-2">Register</a>
    </div>
</body>
</html>
