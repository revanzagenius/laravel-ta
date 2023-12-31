<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Cybersecurity Learning Platform</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-green">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/LOGO.png') }}" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Practice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <button class="btn btn-pink">Sign Up</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section 1 -->
    <section id="hero" class="container mt-4">
        <div class="row">
            <div class="hero-p col-md-6">
                <h3>PLATFORM PEMBELAJARAN CYBERSECURITY</h3>
                <h1>DENGAN METODE GAMIFIKASI CAPTURE THE FLAG</h1>
                <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book. It has survived not only five centuries.
                </p>
                <button class="btn btn-pink">Pelajari Lebih Lanjut</button>
            </div>
            <div class="hero-img col-md-6">
                <img src="{{ asset('assets/img/icon1.png') }}" alt="Icon 1" class="img-fluid" width="400"
                    height="400">
            </div>
        </div>
    </section>

    <!-- Hero Section 2 -->
    <section id="heroes" class="container mt-4">
        <div class="row">
            <div class="heroes-img col-md-6">
                <img src="{{ asset('assets/img/icon2.png') }}" alt="Icon 2" class="img-fluid">
            </div>
            <div class="heroes-p col-md-6">
                <h3>Kamu Mungkin Memerlukan ini!!</h3>
                <h1>ONLINE COURSES CYBERSCURITY</h1>
                <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book. It has survived not only five centuries.
                </p>
                <button class="btn btn-pink">Pelajari Lebih Lanjut</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-4">
        <div class="container">
            <p>&copy; 2023 Cybersecurity Learning Platform</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
