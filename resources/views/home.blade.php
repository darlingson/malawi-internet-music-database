<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Malawian Music Database</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupporte    dContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Songs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <header class="bg-dark text-white text-center p-4">
        <h1>Malawian Music Database</h1>
    </header>

    <main class="p-4">
        <div class="container">
            <div id="app" ></div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center p-4 fixed-bottom">
        &copy; 2024 Malawian Music Database
    </footer>

    <!-- Bootstrap JS (optional if you need Bootstrap functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

