<nav class="navbar navbar-expand-lg px-5">
    <div class="container-fluid ">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=#>Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right"></i> Shop all</a>
                        </li>

                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right"></i>
                                Necklaces</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right"></i>
                                Bracelets</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right"></i> Earrings</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right"></i> Rings</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('about')}}">About</a>
                </li>

            </ul>

            <a class="navbar-brand me-auto" href="#}}">
                <img height="80px" src="{{ asset('images/icon-5.png') }}" alt="Logo">
            </a>
            <div><i class="fa-solid fa-magnifying-glass "></i>
                <i class="fa-solid fa-cart-shopping mx-3"></i>
                <i class="fa-regular fa-user"></i>

            </div>

        </div>
    </div>
    <a class="text-decoration-none text-dark" href="{{route('login')}}">Login</a>
</nav>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > window.innerHeight) { // Adjust this value as needed
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    });
</script>
