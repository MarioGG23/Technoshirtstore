<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<!--------------------------------------------------- Importancion de archivos ------------------------------------------>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link rel="stylesheet" href="asssets/css/font.css">
    <link rel="stylesheet" href="assets/css/main1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!--iconos-->
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
</head>

<!----------------------------------------- Navegación y creacion de boton carrito ------------------------------------>
<body>
    <a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TechnoShirtStore</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link text-info" category="all">Todo</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="social-bar">
                    <a href="https://www.facebook.com/" class="icon icon-facebook" target="_blank"></a>
                    <a href="https://twitter.com/" class="icon icon-twitter" target="_blank"></a>
                    <a href="https://www.youtube.com/" class="icon icon-youtube" target="_blank"></a>
                    <a href="https://www.instagram.com/" class="icon icon-instagram" target="_blank"></a>
                </div>
                <section class="buttons">
                    <a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a>
                    <a href="https://twitter.com/" class="fa fa-twitter" target="_blank"></a>
                    <a href="https://www.https://myaccount.google.com/profile" class="fa fa-google-plus" target="_blank"></a>
                    <a href="https://www.youtube.com/" class="fa fa-youtube"target="_blank"></a>
                    <a href="https://linkedin.com/" class="fa fa-linkedin"target="_blank"></a>
                </section>
            </div>
        </nav>
    </div>
    <pre></pre>
    <pre></pre>


    <!------------------------------------------------- carrusel de bienvenida------------------------------------------------------>

    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
            <div class="row p-5">
                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img class="img-fluid" src="assets/img/carrusel1.jpg" alt="">
                </div>
                <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left align-self-center">
                    <h1 class="h1 text-util"><b>TechnoShirtStore</b></h1>
                    <h3 class="h2">Bienvenid@ a la mejor tienda para programadores</h3>
                    <p>TechnoShirtStore es una tienda dedicada a la venta de articulos exclusivos para personas relacionadas con el mundo de la informática y la programación.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
            <div class="row p-5">
                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img class="img-fluid" src="assets/img/node.jpg" alt="">
                </div>
                <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left">
                    <h1 class="h1">Las mejores ofertas de la web</h1>
                    <h3 class="h2">Solo por tiempo limitado</h3>
                    <p>
                    Aprovecha esta oportunidad solo por tiempo limitado, todos nuestros productos con un 25% de descuento.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
            <div class="row p-5">
                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img class="img-fluid" src="assets/img/122.jpg" alt="">
                </div>
                <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left">
                    <h1 class="h1">Síguenos en redes sociales</h1>
                    <h3 class="h2">Para no perderte todas nuestras ofertas </h3>
                    <p>
                    Ademas realizaremos sorteos cada mes, mientras mas compartas nuestra página mas probabilidades tendrás de ganar.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fa fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fa fa-chevron-right"></i>
        </a>
    </div>

<!------------------------------------------------- Despliegue de los productos ------------------------------------------------>

    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through"><?php echo $data['precio_normal'] ?></span>
                                        <?php echo '$'.$data['precio_rebajado'].' CLP' ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">TechnoShirtStore Copyright &copy; Todos los derechos reservados 2022 - Proyecto de Taller de desarrollo de software</p>
            <p class="m-0 text-center text-white">Telefono de contacto: +56940186692 --- email: mario.gonzalez.01@alu.ucm.cl, claudio.alcaino@alu.ucm.cl</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>