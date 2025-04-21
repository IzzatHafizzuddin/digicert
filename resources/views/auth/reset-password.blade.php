<x-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div class="form">
        <form method="POST" action="{{ route('password.reset')}}">
            @csrf
            <h2>Reset Password</h2>

            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" name="password" class="form-control" placeholder="New Password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="btn">Reset Password</button>
        </form>
    </div>
</x-layout>