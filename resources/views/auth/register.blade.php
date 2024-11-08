@extends('layouts.Structure')
@include('layouts.components')
@section('headerlinks')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="form-container">
    <div class="form-wrapper">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            @yield('alertbar')
            <h3 class="text-center mb-4">Create Account</h3>

            <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}" placeholder="Enter your name" autofocus/>
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    value="{{ old('email') }}" placeholder="Enter your email" />
                <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Password" />
                <label for="password">Password</label>
                <span class="input-group-text" id="toggle-password">
                    <i class="fa fa-eye"></i>
                </span>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Confirmation Field -->
            <div class="input-group form-floating">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm Password" />
                <label for="password_confirmation">Confirm Password</label>
                <span class="input-group-text" id="toggle-password_confirmation">
                    <i class="fa fa-eye"></i>
                </span>
            </div>

            <div class="form-check mb-4">
                <input type="checkbox" id="myCheckbox" name="terms">
                <span class="custom-checkbox"></span>
                <label for="myCheckbox">
                    I agree to the <a href="#">privacy policy & terms</a>.
                </label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-4">Sign Up</button>

            <div class="mb-4 google">
                <button type="" class="btn btn-dark w-100">
                    <i class="fab fa-google"></i> Continue with Google</button>
            </div>
            <div class="text-center mt-3">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>
</div>

@endsection
@section('footerlinks')
    <script>
        function togglePassword(fieldId, icon) {
            var passwordField = document.getElementById(fieldId);
            var iconElement = icon.querySelector('i');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                iconElement.classList.remove('fa-eye');
                iconElement.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                iconElement.classList.remove('fa-eye-slash');
                iconElement.classList.add('fa-eye');
            }
        }

        document.getElementById('toggle-password').addEventListener('click', function() {
            togglePassword('password', this);
        });

        document.getElementById('toggle-password_confirmation').addEventListener('click', function() {
            togglePassword('password_confirmation', this);
        });

    </script>
@endsection
