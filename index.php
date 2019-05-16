<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sutep Andahuaylas</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- icon fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- css propios -->
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    
    <!-- NAVEGACIÓN -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-k">
        <div class="container">
            <a class="navbar-brand" href="#">
                Sutep<img src="img/logosutep.png" alt="Logo sutep" class="img-logo"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto lead">
                    <li class="nav-item">
                        <a class="nav-link nav-link-k" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-k" href="forum.html">Fórum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-k" href="organizacion.html">Organización</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-k" href="certificado.html">Certificado</a>
                    </li>
                </ul>
            </div>        
        </div>
    </nav>

    <!-- -- duplicado navegación / fondo para arreglar slide -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-k">
        <div class="container">
            <a class="navbar-brand" href="#">
                
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto lead">
                    <li class="nav-item">
                        <a class="nav-link nav-link-k text-black disabled" href="#" tabindex="-1" aria-disabled="true">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-k text-black disabled" href="#" tabindex="-1" aria-disabled="true">Fórum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-k text-black disabled" href="#" tabindex="-1" aria-disabled="true">Organización</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-k text-black disabled" href="#" tabindex="-1" aria-disabled="true">Certificado</a>
                    </li>
                </ul>
            </div>        
        </div>
    </nav>
    <!-- FIN NAVEGACIÓN -->

    <!-- SECCIÓN HEADER -->

    <div id="carouselExampleControls" class="carousel slide pt-0 slide-k" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- secction container -->
    <section class="bg-warning py-5">
    
        <div class="container lead text-light text-center">
            <img src="img/logosutep.png" width="100px" alt="">
            <p><b>Un niño, un maestro, un libro, un lápiz pueden cambiar el mundo (Malala Yousafzai).</b></p>
        </div>
    </section>

    <!-- SECTION NOTICIAS -->
    <section class="bg-light text-muted py-5">
        <div class="container">
            
            <div class="row">
                <div class="text-center col-md-8">
                    <h1 class="display-5 pb-4 text-center">NOTICIAS</h1>
                    <?php
                        require('conect2.php');
                        $con = new DB();
                        $server = $con->conectar();
                        
                        $query = "SELECT * FROM articulos ORDER BY orden ASC";
                        $result = mysqli_query($server,$query);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            
                        

                    ?>                                  
                    <div>
                        <div class="card text-left  my-1">
                            <div class="card-body">
                                <h6> <?php echo $row['titulo']; ?> </h6>
                                <div class="d-flex">
                                    <img src="backend/<?php echo $row['ruta']; ?>" width="100px" height="100px;" style="width:100px;" alt="">                                    
                                    <p class="ml-3"> <?php echo $row['introduccion'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                </div>

                <div class="col-md-4 text-center">
                        <iframe width="340" height="240" src="https://www.youtube.com/embed/fE0v6lZ3fuw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRezuam-600773577055743%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
            
        </div>
    

    </section>


    <!-- FOOTER -->

    <footer class="bg-dark text-white ">
        <div class="container">
            <p class="mb-0 p-5"><span>©&nbsp; </span><span >2019</span><span>&nbsp;</span><span>SutepAndahuaylas</span><span>.&nbsp;</span><span>Todos los derechos reservados</span><span>&nbsp;</span>. Desarrollado&nbsp;por&nbsp;<a href="https://www.rezuam.intcap.org">Rezuam</a></p>
            <div class="d-flex flex-row justify-content-left">
                                <div class="p-4">
                                    <a href="https://www.facebook.com/KevQL1109" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
            </div>
        </div>
    </footer>




    <!-- js Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>