<x-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <div class="form">
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <h2>Log In</h2>

            @if ($errors->any())
                <div class="alert alert-danger text-center">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group mt-3">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required value="{{ old('email') }}">
            </div>

            <div class="form-group mt-3">
                <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
            </div>

            <button type="submit" class="btn font-weight-bold">Log In</button>

            <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
            <p>Forgot your password? <a href="{{ route('password.request') }}">Forgot Password</a></p>
        </form>
    </div>
</x-layout>
