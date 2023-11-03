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

    <!-- Add Challenges Section -->
    <section id="ad-cl" class="container mt-4 text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Add Challenges</h1>
            </div>
        </div>
    </section>

    <!-- Challenges Table Section -->
    <section id="cl-tb" class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Value</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Revanza</td>
                    <td>Dynamic</td>
                    <td>True</td>
                    <td>
                        <button class="btn btn-pink">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-pink">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Revanza</td>
                    <td>Dynamic</td>
                    <td>True</td>
                    <td>
                        <button class="btn btn-pink">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-pink">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Revanza</td>
                    <td>Dynamic</td>
                    <td>True</td>
                    <td>
                        <button class="btn btn-pink">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-pink">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Revanza</td>
                    <td>Dynamic</td>
                    <td>True</td>
                    <td>
                        <button class="btn btn-pink">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-pink">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Revanza</td>
                    <td>Dynamic</td>
                    <td>True</td>
                    <td>
                        <button class="btn btn-pink">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-pink">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Revanza</td>
                    <td>Dynamic</td>
                    <td>True</td>
                    <td>
                        <button class="btn btn-pink">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-pink">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Revanza</td>
                    <td>Dynamic</td>
                    <td>True</td>
                    <td>
                        <button class="btn btn-pink">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-pink">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Revanza</td>
                    <td>Dynamic</td>
                    <td>True</td>
                    <td>
                        <button class="btn btn-pink">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-pink">Delete</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
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
