<div class="nav-bar">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{url('public\startbootstrap-shop-homepage-gh-pages\assets\favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{url('public\startbootstrap-shop-homepage-gh-pages\css\styles.css')}}" rel="stylesheet" />


            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="{{url('producto/')}}">Abarrotes el Inge</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('producto/')}}">Inicio</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#!">About</a></li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('producto.index')}}">All Products</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="{{route('producto.create')}}">Add Product</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Departament</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('departamento.index')}}">All Departaments</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="{{route('departamento.create')}}">Add Departament</a></li>
                                </ul>
                            </li>
                        </ul>
                        {{-- <form class="d-flex">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form> --}}
                    </div>
                </div>
            </nav>
</div>