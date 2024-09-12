<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="El Chikh Food - The best dining experience in town.">
    <meta name="keywords" content="restaurant, food, dining, El Chikh Food">
    <meta property="og:title" content="El Chikh Food">
    <meta property="og:description" content="The best dining experience in town.">
    <meta property="og:image" content="URL_TO_YOUR_IMAGE">
    <meta property="og:url" content="URL_TO_YOUR_WEBSITE">
    <title>El Chikh Food</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .background-image {
            height: 100vh;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.5);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
        footer {
            margin-top: 60px; /* Adds space above the footer */
        }
    </style>
</head>
<body>
    <header class="bg-dark text-white p-3 sticky-top">
        <div class="container">
            <h1 class="display-4">El Chikh Food</h1>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('menu.index') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('reservation.create') }}">Réservation</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('working-time') }}">Working Time</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact.create') }}">Complaint</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-dark text-white text-center p-3">
        <div class="container">
            <p>&copy; 2024 El Chikh Food</p>
            <p>123 Food Street, Flavor Town, USA</p>
            <p>Email: info@elchikhfood.com | Phone: (123) 456-7890</p>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank" class="text-white mr-2">Facebook</a>
                <a href="https://twitter.com" target="_blank" class="text-white mr-2">Twitter</a>
                <a href="https://instagram.com" target="_blank" class="text-white">Instagram</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>