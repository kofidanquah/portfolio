<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Reset Password</title>
    <link rel="stylesheet" href="css/Signup.css">
</head>

<body>

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <form action="{{ route('password.update') }}" method="POST" class="p-4 shadow rounded bg-white" style="width: 100%; max-width: 400px;">
            @csrf

            
            <h5 class="text-center mb-2"> Reset Password </h5><br>

            <div class="form-floating form-floating-outline mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"  name="email"
                value="{{ request()->email }}" placeholder="Enter your email" />
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" id="password"  class="form-control @error('password') is-invalid @enderror" name="password"
                            value="{{ old('password') }}" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                            <label for="password">Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer" id="toggle-password"><i
                                class="fa fa-eye 2x"></i></span>
                    </div>
                </div>
            </div>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                            <label for="password_confirmation">Confirm Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer" id="toggle-password_confirmation"><i
                                class="fa fa-eye 2x"></i></span>
                    </div>
                </div>
                <input type="hidden" name="token" value="{{ request()->route('token') }}">
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Reset</button>


        </form>
    </div>


    </div><br>

</body>
<script>
    document.getElementById('toggle-password').addEventListener('click', function() {
        var passwordField = document.getElementById('password');
        var icon = this.querySelector('i');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    document.getElementById('toggle-password_confirmation').addEventListener('click', function() {
        var passwordField = document.getElementById('password_confirmation');
        var icon = this.querySelector('i');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>

</html>
