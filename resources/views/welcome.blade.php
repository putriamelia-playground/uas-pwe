<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .splash {
            height: 100vh;
            background: linear-gradient(135deg, #b0bed4, #6610f2);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .splash h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .splash p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn-splash {
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-splash:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

    </style>
</head>
<body>
    <div class="splash">
        <img src="{{ asset('logo-mercu.png') }}" alt="Finance App Logo" width="120" class="mb-4">

        <h1>Finance App</h1>

        <p>Universitas Mercu Buana</p>

        <a href="{{ route('login.form') }}" class="btn btn-light">Login</a>
        
    
        </a>
    </div>
</body>
</html>
