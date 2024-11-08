<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: "Poppins", sans-serif;
        }

        form {
            padding: 20px;
            width: 100%;
            max-width: 400px;
            font-family: "Poppins", sans-serif;
            display: block;
            justify-content: center;
        }

        input {
            border-radius: 5px;
            padding: 10px;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        .alert {
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">

        <form action="{{ route('password.email') }}" method="POST" class="p-4 shadow rounded bg-white"
            style="width: 100%; max-width: 400px;">

            @if ($message = session('status'))
                <div class="alert alert-success">{{ $message }}</div>
            @endif


            <h3 class="text-center mb-4">Forgot Password</h3>
            @csrf
            <div class="form-floating mb-4">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" placeholder="Enter your email" required autofocus>
                <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Send Reset Password link</button>
            <div class="text-center">
                <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>

</body>

</html>
