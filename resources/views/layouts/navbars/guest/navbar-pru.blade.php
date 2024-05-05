<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 d-flex justify-content-center align-items-center text-center" href="{{ route('home') }}">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="img/ICONO_SINFONDO.png" class="img-fluid mb-md-0 mb-0 mx-auto align-self-center" width="30" height="24" />
                            </div>
                            <span class="align-self-center align-text-center align-middle">{{ config('app.name') }}🌻</span>
                        </div>
                    </a>


                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item">
                                <a class="nav-link me-2" href="/">
                                    <!-- <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> -->
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="/">
                                    <!-- <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> -->
                                    Categorias
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="/">
                                    <!-- <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> -->
                                    Contacto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="/">
                                    <!-- <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> -->
                                    Nosotros
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="/">
                                    <!-- <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> -->
                                    Información
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('shop') }}">
                                    <!-- <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> -->
                                    Todos los productos
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('login') }}">
                                    <!-- <i class="fas fa-key opacity-6 text-dark me-1"></i> -->
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1" style="font-size: 30px;"></i>
                                    <!-- Iniciar sesión -->
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="/">
                                    <!-- <i class="fas fa-key opacity-6 text-dark me-1"></i> -->
                                    <i class="fa fa-search opacity-6 text-dark me-1" aria-hidden="true" style="font-size: 30px;" title="Buscar"></i> <!-- Iniciar sesión -->
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle me-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-shopping-cart opacity-6 text-dark me-1"></i> {{ \Cart::getTotalQuantity()}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                                    <ul class="list-group" style="margin: 20px;">
                                        @include('partials.cart-drop')
                                    </ul>

                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>