<!doctype html>
<html lang="cs">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    {{--    <!-- Bootstrap CSS -->--}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"--}}
    {{--          rel="stylesheet"--}}
    {{--          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"--}}
    {{--          crossorigin="anonymous">--}}

    {{--    Fonts--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

    <title>ProScholy.cz - zázemí pro křesťanské hudebníky</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand"
           href="#">
            <img src="https://proscholy.atlassian.net/rest/servicedesk/1/customer/viewport-resources/portal-logo/1/2"
                 height="50px" style="box-shadow: none">
            ProScholy.cz</a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"
             id="navbarSupportedContent">
{{--            <ul class="navbar-nav mb-2 mb-lg-0 mr-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active"--}}
{{--                       aria-current="page"--}}
{{--                       href="#">Úvod</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
            <form class="mr-0 ml-auto form-inline"
                  action="//zpevnik.proscholy.cz">
                <input class="form-control me-2"
                       type="search"
                       name="vyhledavani"
                       placeholder="Vyhledat píseň"
                       aria-label="Search">
                <button class="btn btn-outline-primary ml-2"
                        type="submit">Hledat
                </button>
            </form>
        </div>
    </div>
</nav>

<div class="bg-blue-light py-3 text-center">
    Spouštíme platformu Regenschori! <a href="#">Číst více</a>
</div>

@yield('content')

{{--<!-- Option 1: Bootstrap Bundle with Popper -->--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"--}}
{{--            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"--}}
{{--            crossorigin="anonymous"></script>--}}

{{--    <script data-jsd-embedded--}}
{{--            data-key="487b4dc9-efb6-4fcb-90d8-53fe74f50b63"--}}
{{--            data-base-url="https://jsd-widget.atlassian.com"--}}
{{--            src="https://jsd-widget.atlassian.com/assets/embed.js"></script>--}}
</body>
</html>
