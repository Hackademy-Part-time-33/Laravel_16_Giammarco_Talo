<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AnimeData</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger p-1">
        <div class="container-fluid mx-3">
            <a class="navbar-brand title_font" href="{{ route('anime.genre') }}">AnimeData</a>
            <img src="/images/chibi_logo.png" class="logo" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto pe-5">
                    <li class="nav-item">
                        <a class="nav-link nav_font mx-3" href="{{ route('anime.genre') }}">Generi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_font" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_font mx-3" href="#">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        <div class="container">
            {{ $slot }}
        </div>
    </main>
    <div class=" mt-5">
        <footer class="text-center text-lg-start bg-danger">
            <div class="container d-flex justify-content-center py-5">
                <button type="button" class="btn btn-dark btn-lg btn-floating mx-2";">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button type="button" class="btn btn-dark btn-lg btn-floating mx-2";">
                    <i class="fab fa-youtube"></i>
                </button>
                <button type="button" class="btn btn-dark btn-lg btn-floating mx-2";">
                    <i class="fab fa-instagram"></i>
                </button>
                <button type="button" class="btn btn-dark btn-lg btn-floating mx-2";">
                    <i class="fab fa-twitter"></i>
                </button>
            </div>
            
            <!-- Copyright -->
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
