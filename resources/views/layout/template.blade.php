<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <nav style="background-color: pink"> Este es mi navbar con mis menus de navegacion</nav>
    <main>

  @yield('content')

    </main>

<footer style="background-color: yellow"> Este es un footer con mis enlace y contactos</footer>
    
</body>
</html>