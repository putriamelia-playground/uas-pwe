<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Finance App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #b0bed4, #6610f2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
            color: white;
        }

        .logo-mercu {
            width: 100px;
            margin-bottom: 15px;
        }

        .app-title {
            font-size: 2.2rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .app-subtitle {
            font-size: 0.9rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 10px;
            padding: 10px 15px;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        .btn-login {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 10px 40px;
            border-radius: 25px;
            font-weight: bold;
            transition: 0.3s;
            margin-top: 15px;
        }

        .btn-login:hover {
            background-color: #0a58ca;
            transform: translateY(-2px);
        }

        .error-text {
            background: rgba(255, 0, 0, 0.2);
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <div class="login-container">
               <img src="{{ asset('logo-mercu.png') }}" alt="Finance App Logo" width="120" class="mb-4">
        <h1 class="app-title">Finance App</h1>
        <p class="app-subtitle">Universitas Mercu Buana</p>

        @if ($errors->any())
            <div class="error-text text-white">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required value="{{ old('email') }}">
            </div>

            <div class="mb-4 text-start">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-login">Login</button>
        </form>
    </div>

</body>
</html>