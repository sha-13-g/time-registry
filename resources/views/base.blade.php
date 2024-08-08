<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Registry</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <header>
        <div class="header-nav">
            <div class="logo">
                Time Registry
            </div>
            <div class="add-btn">
                <button>Ajouter</button>
            </div>
        </div>
    </header>

        @yield('content')
</div>

</body>
</html>
