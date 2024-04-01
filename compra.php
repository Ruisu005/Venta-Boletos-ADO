<?php

session_start();

if (!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Por favor debes iniciar sesion");
    window.location = "index.php";
    </script>
    ';
    //header("location: index.php");
    session_destroy();
    die();
}

$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Boletos</title>

    <link rel="shortcut icon" href="assets/images/ado-logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="assets/css/estiloCompra.css">
        <link rel="stylesheet" href="assets/css/estiloCompra2.css">
</head>
<body>

    <!--<h1>Bienvenido <?php echo $usuario; ?> a la página de compra de boletos</h1>

    <a href="php/cerrar_sesion.php">Cerra Sesion</a> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-gradient">
        <div class="container px-4 px-lg-5">
            
            <a class="navbar-brand" href="#!">Camiones ADO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                    <!--<li class="nav-item"><a class="nav-link" href="#!">Nosotros</a></li> -->
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item"><a class="nav-link" href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
                </ul>
                <form class="d-flex">
                    <button id="cart-button" class="btn btn-outline-dark" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Carrito
                        <span id="cart-count" class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
        <!-- Header-->
        <header class="header py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Bienvenido</h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php echo $usuario; ?></p>
                </div>
            </div>
        </header>

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="product-list">
                    <div class="col mb-5">
                    <div class="card h-100 bg-travel">
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/images/Ciudad_del_Carmen.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Ciudad del Carmen</h5>
                                <!-- Product price-->
                                <span class="product-price">$752.00</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button class="btn btn-outline-dark mt-auto add-to-cart">Añadir al Carrito</button></div>
                        </div>
                    </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-travel">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/Tuxtla.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Tuxtla Gutiérrez</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <!--<span class="text-muted text-decoration-line-through">$20.00</span>-->
                                    <span class="product-price">$1210.00</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto add-to-cart">Añadir al Carrito</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-travel">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/Cuernavaca.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Cuernavaca</h5>
                                    <!-- Product price-->
                                    <!--<span class="text-muted text-decoration-line-through">$50.00</span>-->
                                    <span class="product-price">$1028.00</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto add-to-cart">Añadir al Carrito</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-travel">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/cancun.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Cancún</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="product-price">$632.00</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto add-to-cart">Añadir al Carrito</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-travel">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/CDMX.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Ciudad de México</h5>
                                    <!-- Product price-->
                                    <!--<span class="text-muted text-decoration-line-through">$50.00</span>-->
                                    <span class="product-price">$1916.00</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto add-to-cart">Añadir al Carrito</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-travel">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/Veracruz.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Veracruz</h5>
                                    <!-- Product price-->
                                    <span class="product-price">$1626.00</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto add-to-cart">Añadir al Carrito</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-travel">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/Puebla.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Puebla</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <!--<span class="text-muted text-decoration-line-through">$20.00</span>-->
                                    <span class="product-price">$1822.00</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto add-to-cart">Añadir al Carrito</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 bg-travel">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/Oaxaca.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Oaxaca de Juárez</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="product-price">$2192.00</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto add-to-cart">Añadir al Carrito</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Modal para el carrito de compras -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Carrito de Compras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul id="cart-list" class="list-group">
                        <!-- Aquí se mostrarán los productos del carrito -->
                    </ul>
                </div>
                <div class="modal-footer">
                    <div id="cart-total" class="fw-bold"></div>
                    <button type="button" class="btn btn-primary" id="pay-button">Pagar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer-->
        <footer class="py-5 bg">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; By Luis Caamal 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/carrito.js"></script>
    </div>
</body>
</html>