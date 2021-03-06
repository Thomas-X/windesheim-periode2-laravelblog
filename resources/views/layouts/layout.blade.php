<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css"/>
    <title>@yield('title')</title>
    <style>
        .nav-padding {
            padding: 1rem 0 1rem 0;
        }
    </style>
</head>
<body>

@component('components.nav')
@endcomponent()


<div class="container">
    @yield('content')
</div>

</body>
</html>