<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ressources humaines</title>

    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">@yield('title')</h3>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('footer')

    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
