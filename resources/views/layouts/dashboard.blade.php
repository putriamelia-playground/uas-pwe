<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            background-color: #212529;
        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }

        .sidebar a:hover {
            background-color: #343a40;
            color: #fff;
        }

        .sidebar .title {
            color: #fff;
            padding: 20px;
            font-weight: bold;
            font-size: 18px;
        }

    </style>
</head>
<body>

    <div class="d-flex">
        <div class="sidebar vh-100">
            <div class="title">
                Finance App
            </div>

            <a href="{{ url('/dashboard') }}">Dashboard</a>

            @auth
            @if(auth()->user()->role_id == 1)
            <div class="text-uppercase text-secondary px-3 mt-3 small">
                Master Data
            </div>
            <a href="{{ url('/expense-categories') }}">Expense Categories</a>
            @endif
            @endauth


            <div class="text-uppercase text-secondary px-3 mt-3 small">
                Transactions
            </div>
            <a href="{{ route('expense_transaction.index')}}">Expense Transactions</a>

            <div class="mt-auto">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <div class="flex-grow-1 p-4">
            @yield('content')
        </div>
    </div>

</body>
</html>
