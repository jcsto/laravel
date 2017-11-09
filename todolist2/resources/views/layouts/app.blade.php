<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') | TodoList</title>
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <footer id="footer" class="text-center">
            <p>
                Copyright &copy; 2017 JC - TodoList
            </p>
        </footer>
    </body>
</html>
