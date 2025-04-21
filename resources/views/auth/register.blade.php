<!-- filepath: /resources/views/auth/register.blade.php -->
<x-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <div class="form">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <h2>Sign Up</h2>

            <!-- Name -->
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your name" class="form-control" required value="{{ old('name') }}">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm your password" class="form-control" required>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn font-weight-bold">Sign Up</button>

            <!-- Link to Login -->
            <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
        </form>
    </div>
</x-layout>
