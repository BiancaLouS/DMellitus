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
	    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

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

                                <li><a class="dropdown-item" href="#">O Cadastro   </a></li>

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


  
</body>
</html>
