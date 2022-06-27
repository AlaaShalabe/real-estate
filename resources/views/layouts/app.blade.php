<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real Estate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<header>
    @include('partials.navbar')
</header>

<body>

    <section class="hero">
        <div class="hero-body">
            <p class="title">
                @yield('title')
            </p>
            <p class="subtitle">
                @yield('subtitle')
            </p>
        </div>
    </section>
    @yield('content')
    @include('partials.footer')
</body>

</html>
