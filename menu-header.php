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
<!-- Fixed Left Sidebar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark pmd-navbar pmd-z-depth">
       
    <a href="javascript:void(0);" 
        data-target="basicSidebar" 
        data-placement="left" 
        class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pmd-sidebar-toggle">
        <i class="material-icons md-light">menu</i></a>
        
        <a class="navbar-brand" href="index.php">Acessa DMellitus</a>
        
        <!-- Navbar Right icon -->		
        <div class="pmd-navbar-right-icon ml-auto">
            <a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect"><i class="material-icons pmd-sm md-light">search</i></a>
        </div>
    </nav>

<section id="pmd-main">

    <!-- Left sidebar -->
    <aside id="basicSidebar" class="pmd-sidebar bg-light pmd-z-depth" role="navigation">
        <ul class="nav flex-column pmd-sidebar-nav">
            <li class="nav-item pmd-user-info">
                <a data-toggle="collapse" href="#collapseExample" class="nav-link btn-user media align-items-center">
                    <img class="mr-3" src="https://pro.propeller.in/assets/images/avatar-icon-40x40.png" width="40" height="40" alt="avatar">
                    <div class="media-body">
                        User
                    </div>
                    <i class="material-icons md-light ml-2 pmd-sm">more_vert</i>
                </a>
                <ul class="collapse" id="collapseExample" data-parent="#basicSidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="material-icons pmd-list-icon pmd-sm">delete</i>
                            <span class="media-body">View Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="material-icons pmd-list-icon pmd-sm">delete</i>
                            <span class="media-body">Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="material-icons pmd-list-icon pmd-sm">delete</i>
                            <span class="media-body">Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="material-icons pmd-list-icon pmd-sm">star</i>
                    <span class="media-body">Stared</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons pmd-list-icon pmd-sm">send</i>
                    <span class="media-body">Sent Email</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons pmd-list-icon pmd-sm">drafts</i>
                    <span class="media-body">Drafts</span>
                </a>
            </li>
        </ul>
    </aside>
    
    <!-- Sidebar Overlay -->
    <div class="pmd-sidebar-overlay"></div>
    
 </section>



  
</body>
</html>
