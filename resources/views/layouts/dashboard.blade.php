<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"> <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            background: linear-gradient(135deg, #b0bed4, #6610f2);
        }

        .sidebar a {
            color: #fff; /* Diubah ke putih agar terlihat di background ungu */
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Hover transparan agar lebih modern */
            color: #fff;
        }

        .sidebar .text-secondary {
            color: rgba(255, 255, 255, 0.7) !important; /* Agar teks kategori tidak terlalu redup */
        }
    </style>
</head>
<body>

    <div class="d-flex">
        <div class="sidebar vh-100 text-white d-flex flex-column p-3">
            <div class="mb-4 text-center fs-4 fw-bold">
                Finance App
            </div>

            <nav class="flex-grow-1">
                <a href="{{ url('/dashboard') }}" class="rounded mb-1">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>

                @auth
                @if(auth()->user()->role_id == 1)
                <div class="text-uppercase text-secondary px-3 mt-4 mb-1 small fw-bold">
                    Master Data
                </div>
                <a href="{{ url('/expense-categories') }}" class="rounded mb-1">
                    <i class="bi bi-list-task me-2"></i> Expense Categories
                </a>
                @endif
                @endauth

                <div class="text-uppercase text-secondary px-3 mt-4 mb-1 small fw-bold">
                    Transactions
                </div>
                <a href="{{ route('expense_transaction.index')}}" class="rounded mb-1">
                    <i class="bi bi-cash-stack me-2"></i> Expense Transactions
                </a>

                <div class="text-uppercase text-secondary px-3 mt-4 mb-1 small fw-bold">
                    Admin
                </div>
                <a href="{{ route('users.index') }}" class="rounded mb-1">
                    <i class="bi bi-people-fill me-2"></i> Users
                </a>
            </nav>

            <div class="mt-auto">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="rounded">
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