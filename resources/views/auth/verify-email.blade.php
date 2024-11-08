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


        @if ($message = session('status'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif

        <div class="p-4 shadow rounded bg-white" style="width: 100%; max-width: 400px;">

        <h3 class="text-center mb-4">Thanks for signing up</h3>
        <p> Before getting started, please verify your email.</p>

            @csrf
            <form action="{{ route('verification.send') }}" method="POST">
                <button type="submit" class="btn btn-primary w-100 mb-3">Send Email Verification</button>
                <div class="text-center">
                    <a href="{{ route('login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
