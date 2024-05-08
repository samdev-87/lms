<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>@yield('title', 'LMS')</title></head>
<body>
<div class="container py-3">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                SOFIZAR
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                @guest
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('login')}}">Войти</a>
                @else
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('admin.home.index')}}">Админ часть</a>
                    <form class="me-3 py-2" id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="link-body-emphasis text-decoration-none"
                           onclick="document.getElementById('logout').submit()">
                            Выйти
                        </a>
                        @csrf
                    </form>
                @endguest
            </nav>
        </div>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal text-body-emphasis">@yield('subtitle', 'SOFIZAR')</h1>
            <p class="fs-5 text-body-secondary">Привет! Мы рады приветствовать вас в команде SOFIZAR</p>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5">
        {{--<ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        </ul>--}}
        <p class="text-center text-body-secondary">© 2024 SOFIZAR</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>
</html>
