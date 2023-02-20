<!DOCTYPE html>
<html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project - Walletmon</title>
<!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
<link href="{{asset('css/layout.css')}}" rel="stylesheet">

</html>
<body class="bg-dark bg-gradient">


<!-- Mobile layout -->

<!-- Mobile layout end -->

<!-- DESKTOP layout -->
<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark bg-gradient justify-content-center mb-4">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://discord.gg/Vn58rMuq">Discord</a>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#langModal">
                Language
            </button>
        </li>
    </ul>
</nav>
<!-- Language Modal -->
<div class="modal fade" id="langModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Choose your language</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <select>
                    <option>English</option>
                    <option>Português</option>
                </select>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- DESKTOP layout end -->
@yield('content')

<!-- DESKTOP footer -->
<footer class="bg-dark text-center text-white fixed-bottom">
    <!-- Grid container -->
    <div class="container p-2 pb-0">
        <!-- Section: Social media -->
        <section class="mb-2">
            <!-- Facebook -->
            <a class="btn btn-outline-light m-1" href="#!">
            <i class="bi bi-facebook"></i>
            </a>

            <!-- Twitter -->
            <a class="btn btn-outline-light m-1" href="#!">
                <i class="bi bi-twitter"></i>
            </a>

            <!-- Google -->
            <a class="btn btn-outline-light m-1" href="#!">
                <i class="bi bi-google"></i>
            </a>

            <!-- Instagram -->
            <a class="btn btn-outline-light m-1" href="#!">
                <i class="bi bi-instagram"></i>
            </a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light m-1" href="#!">
                <i class="bi bi-linkedin"></i>
            </a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!">
                <i class="bi bi-github"></i>
            </a>
        </section>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="font-size:14px; background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white text-decoration-none" href="{{route('home')}}">Walletmon</a>
    </div>
</footer>
<!-- DESKTOP footer end -->


<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>