

<!DOCTYPE html>
<html>

<head>
    <title>Portal Dador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/fevicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">

     <!-- data CSS -->
   <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
   
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
				
					
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:esperança@gmail.com">esperança@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+244 934-605-944">+244 934-605-944</a>
                    
			   </div>
                <div>
                    <a class="text-light" href="#" data-bs-toggle="modal" data-bs-target="#ModalAdd" target="_blank"><i class="fa fa-user me-2"> Login</i></a>
                </div>
			</div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-primary logo h1 align-self-center" href="index.php">
            <img class="" src="assets/img/logo.png">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index_2.php"> Inicio</a>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#serviço">Serviços</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="marcação.php"> Contactos</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="minha_agenda.php"> Localização</a>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link" href="sair.php"> Sair</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->
	
	<!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="classes/verificar-login.php">
			
			  <div class="modal-header">
			  <h4 class="modal-title" id="myModalLabel">Login</h4>
				   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
			  <div class="modal-body">
				
				  <div class="form-group ">
					<label for="title" class="col-sm-3 control-label">E-mail</label>
					<div class="col-sm-7">
					  <input type="text" name="email_paciente" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-3 control-label">Senha</label>
					<div class="col-sm-7">
					  <input type="password" name="senha_paciente" class="form-control" id="end">
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="entrar"><i class="fa fa-save"></i> Entrar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
