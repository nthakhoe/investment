<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Invexorite Wealth Dashboard</title>

    <link rel="stylesheet"
          href="{{ asset('css/dashboard.css') }}">

</head>

<body>

<header class="dashboard-header">

    <div class="logo">
        Invexorite Wealth
    </div>

    <nav>
        <a href="#">Dashboard</a>
        <a href="#">My Investments</a>
        <a href="#">Transactions</a>
        <a href="{{ route('investor.deposits.create') }}"
           class="btn btn-primary">
            Deposit Funds
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="logout-btn">Logout</button>
        </form>
    </nav>

</header>


<main class="dashboard-content">

    @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @endif


    @if(session('error'))
        <div class="alert error">
            {{ session('error') }}
        </div>
    @endif


    @yield('content')

</main>


<footer class="dashboard-footer">

    © {{ date('Y') }} Invexorite Wealth

</footer>

</body>
</html>