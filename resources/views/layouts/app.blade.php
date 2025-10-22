<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Libreta de Notas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center mb-8">Libreta de Notas</h1>

        <div class="main-container">

            @yield('content')

        </div>
        
    </div>
</body>
</html>