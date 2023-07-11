<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>

        @yield('pageName')

    </title>

    @vite('resources/js/app.js')
</head>
<body>
    <div class="container-fluid">
        <header class="container">
            @yield('content')
        </header>
    </div>
</body>
</html>