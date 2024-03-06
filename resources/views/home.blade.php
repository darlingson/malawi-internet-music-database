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
        <div id="app" class="container">
            <welcome></welcome>
            <featured-content></featured-content>
            <upcoming-events></upcoming-events>
        </div>
    </main>

    <footer class="bg-dark text-white text-center p-4 fixed-bottom">
        &copy; 2024 Malawian Music Database
    </footer>

    <!-- Bootstrap JS (optional if you need Bootstrap functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<template>
    <div>
        <h2>Welcome to the Malawian Music Database!</h2>
        <p class="lead">Explore and discover the rich musical heritage of Malawi. Our web app serves as an archive for information about Malawian music, allowing you to delve into the world of songs, artists, and albums.</p>
        <p>Use the search feature to find details about your favorite songs, albums, or artists. Stay tuned for updates as we continue to expand our collection and bring you more insights into the vibrant Malawian music scene.</p>
    </div>
</template>

<template>
    <div>
        <h2 class="mt-4">Featured Content</h2>
        <p>Check out our curated selection of featured songs, albums, and artists. Discover hidden gems and popular hits from the diverse Malawian music landscape.</p>
        <div class="d-flex justify-content-around">
            <!-- Placeholder for featured content images or links -->
            <img src="https://via.placeholder.com/150" alt="Featured Song 1">
            <img src="https://via.placeholder.com/150" alt="Featured Album 1">
            <img src="https://via.placeholder.com/150" alt="Featured Artist 1">
        </div>
    </div>
</template>

<template>
    <div>
        <h2 class="mt-4">Upcoming Events</h2>
        <p>Stay informed about upcoming music events, concerts, and festivals in Malawi. Don't miss the chance to experience live performances from your favorite artists and immerse yourself in the local music culture.</p>
        <div>
            <!-- Placeholder for upcoming events details or links -->
            <p>Event: Malawi Music Festival</p>
            <p>Date: July 15, 2024</p>
            <p>Location: Blantyre Amphitheater</p>
            <p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </p>
        </div>
    </div>
</template>
