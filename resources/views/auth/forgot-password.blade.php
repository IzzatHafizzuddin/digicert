<x-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div class="form">
        <form method="POST" action="{{route('password.email')}}">
            @csrf
            <h2>Forgot Password</h2>

            @if (session('success'))
                <div class="msg">
                    {{ session('success')}}
                </div>
            @endif

            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Enter your email" required value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn">Send OTP</button>

            <p>Cancel? <a href="{{ route('login') }}">Back to login</a></p>
        </form>
    </div>
</x-layout>