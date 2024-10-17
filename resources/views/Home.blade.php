<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Aseguramos que el body ocupe el 100% de la pantalla */
        html, body {
            height: 100%;
        }

        /* Usamos flexbox para distribuir los elementos */
        body {
            display: flex;
            flex-direction: column;
        }

        /* El contenido principal debe expandirse para llenar el espacio disponible */
        .content {
            flex: 1;
        }

        /* Estilos opcionales para el footer */
        footer {
            background-color: #f8f9fa;
            padding: 1rem 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mi Página</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

        </div>
    </div>
</nav>

<!-- Contenedor principal (Cuerpo) -->
<div class="container-fluid content my-5">
    <div class="row">
        <div class="col">
            <h1>Bienvenido a mi página</h1>
            <p>Este es el contenido principal.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
    <div class="container-fluid">
        <p>&copy; 2024 Mi Página. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
