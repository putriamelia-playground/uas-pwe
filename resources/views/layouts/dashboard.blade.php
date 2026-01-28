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
            background: linear-gradient(135deg, #b0bed4, #6610f2);

        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }

        .sidebar a:hover {
            background-color: #653a6f;
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
        <div class="sidebar vh-100 text-white d-flex flex-column p-3" style="width: 250px;">
            <div class="mb-4 text-center fs-4 fw-bold">
                Finance App
            </div>

            <nav class="flex-grow-1">
                <a href="{{ url('/dashboard') }}" class="d-block py-2 px-3 mb-1 rounded text-white text-decoration-none hover-bg-light">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>

                @auth
                @if(auth()->user()->role_id == 1)
                <div class="text-uppercase text-secondary px-3 mt-4 mb-1 small fw-bold">
                    Master Data
                </div>
                <a href="{{ route('expense_categories.index')}}" class="d-block py-2 px-3 mb-1 rounded text-white text-decoration-none hover-bg-light">
                    <i class="bi bi-list-task me-2"></i> Expense Categories
                </a>
                @endif
                @endauth

                <div class="text-uppercase text-secondary px-3 mt-4 mb-1 small fw-bold">
                    Transactions
                </div>
                <a href="{{ route('expense_transaction.index')}}" class="d-block py-2 px-3 mb-1 rounded text-white text-decoration-none hover-bg-light">
                    <i class="bi bi-cash-stack me-2"></i> Expense Transactions
                </a>
            </nav>

            <div class="mt-auto px-3">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-block py-2 px-3 rounded text-white text-decoration-none hover-bg-light">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <div class="flex-grow-1 p-4 bg-light">
            @yield('content')
        </div>
    </div>


</body>
</html>
