<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Certificate</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header class="main-header">
        <nav class="navbar">
            <h1 class="logo">
                <a href="{{ route('welcome') }}">Digital Certificate</a>
            </h1>
    
            <div class="nav-buttons">
                @guest
                    <a href="{{ route('show.login') }}" class="nav-btn">Login</a>
                    <a href="{{ route('show.register') }}" class="nav-btn">Register</a>
                @endguest
    
                @auth
                    <span class="greeting">Hi {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="logout-form">
                        @csrf
                        <button type="submit" class="nav-btn">Logout</button>
                    </form>
                @endauth
            </div>
        </nav>
    </header>    

    <main class="page-wrapper]">
        {{ $slot }}
    </main>

</body>
</html>
