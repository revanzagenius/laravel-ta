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

    <!-- Login Section -->
    <section id="login" class="container mt-4 text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="{{ asset('assets/img/LOGO.png') }}" alt="Logo" class="img-fluid">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-pink">Login</button>
                    <button type="submit" class="btn btn-pink">Register Now</button>
                </form>
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
