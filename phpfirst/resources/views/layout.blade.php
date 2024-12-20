<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body class="bg-dark text-white">

<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark text-white">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4 text-white">PHP First</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/about">О нас</a>
    </nav>
    <a class="btn btn-outline-warning" href="/review">Отзывы</a>
</div>

<div class="container">
    @yield('main_content')
</div>

</body>
</html>
