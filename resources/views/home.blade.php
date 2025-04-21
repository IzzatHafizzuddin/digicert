<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="text-center">
        <img src="{{ asset('images/logo_iscb.png') }}" alt="Logo" class="mb-4">
        <h1>Hi</h1>
        <p>Department of Information Security Certification Body</p>
        <form action="{{  route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger m-2">Logout</button>
        </form>
    </div>
</body>
</html>
