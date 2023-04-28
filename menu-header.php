<!DOCTYPE html>
<html lang="pt_BR">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Menu Público</title>

      <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
       <link href="owl-carousel/owl.theme.css" rel="stylesheet">

       <link rel="stylesheet" href="Css/bootstrap.min.css"  type="text/css">
      <link rel="stylesheet" href="Css/estilo.css">

  </head>
<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
             
            <a class="navbar-brand" href="#">  <h4> Acessa DMellitus </h4>  </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                 <span class="navbar-toggler-icon"></span>
            </button>

            <!-- SideBar -->

            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Mais Opções</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Entre em Contato</a>
                            <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Curiosidades </a>
                            <hr>
                        </li>

                        <!-- Dropdown para maisn informações do aplicativo  -->

                        <li class="nav-item dropdown " >
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mais Sobre o Aplicativo
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark">
                                    
                                <li><a class="dropdown-item" href="#">Administração de Glicemia</a></li>

                                <li><a class="dropdown-item" href="#">Exercicíos e Receitas</a></li>

                                <li><a class="dropdown-item" href="#">Outras Ferramentas</a></li>

                                <li> <hr class="dropdown-divider"> </li>

                                <li><a class="dropdown-item" href="#"> O Cadastro </a></li>

                                <li><a class="dropdown-item" href="#">Políticas e Termos de Uso</a></li>

                                <li><a class="dropdown-item" href="#">Para Menores de Idade</a></li>

                            
                            </ul>

                            <hr>
                        </li>
                    </ul>

                    <!-- Barra de pesquisa  -->

                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="O que está procurando?" aria-label="Search">
                        <button class="btn btn-danger" type="submit">Pesquisar</button>
                    </form>

                </div>
            </div>
        </div>
    </nav>

    <!-- carousel do princiapl  -->

    <div id="carouselPrincipal" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Img/IdosoModerno.jpg" class="d-block w-100" alt="Idoso usando aplicativo">

                        <!-- Texto do banner -->
                        <div class="carousel-caption text-left textoBanner">
                            <h1>FAÇA JÁ O DOWNLOAD! </h1>
                            <h3 class="inlineIcone"><a href=""><img src="Img/googlePlay.png" style="width: 150px;" alt="Google Play"></a></h3>
                            <h3 class="inlineIcone"><a href=""><img src="Img/appleStore.png" style="width: 150px;" alt="Apple Store"></a>

                            <p class="subTexto">Controle sua Glicemia, Controle seu Horário, Controle-se. </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                    <img src="Img/maeFilha.jpg" class="d-block w-100" alt="Pai e filho usando aplicativo">
                    <div class="carousel-caption text-left textoBanner">
                            <h1>FAÇA JÁ O DOWNLOAD!</h1>
                            <h3 class="inlineIcone"><a href=""><img src="Img/googlePlay.png" style="width: 150px;" alt="Google Play"></a></h3>
                            <h3 class="inlineIcone"><a href=""><img src="Img/appleStore.png" style="width: 150px;" alt="Apple Store"></a>

                            <p class="subTexto">Controle sua Glicemia, Controle seu Horário, Controle-se. </p>
                        </div>
                    </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>

</body>
</html>
