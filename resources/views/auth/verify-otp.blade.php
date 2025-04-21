<x-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div class="form">
        <form method="POST" action="{{ route('password.otp.verify')}}">
            @csrf
            <h2>Verify OTP</h2>

            <div class="form-group">
                <label for="otp">OTP:</label>
                <input type="text" name="otp" class="form-control" placeholder="Enter OTP" required>
                @error('otp')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn">Verify OTP</button>
        </form>
    </div>
</x-layout>