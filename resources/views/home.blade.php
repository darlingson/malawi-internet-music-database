<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
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

