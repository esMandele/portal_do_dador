

<!DOCTYPE html>
<html>

<head>
    <title>Portal do Dador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico">

	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="leaflet.css">
   	<script src="leaflet.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
    <link rel="stylesheet" href="templatemo.css">
    <link rel="stylesheet" href="custom.css">
	<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="fontawesome.min.css">

</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-danger navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:esperança@gmail.com">contacto@portaldodador.com.ao</a>  
			   </div>
                <div>
                    <a class="text-light" href="#" data-bs-toggle="modal" data-bs-target="#ModalAdd" target="_blank"><i class="fas fa-user-circle me-2" title="Logar como usuario">  Login </i></a> / <a class="text-light" href="#" data-bs-toggle="modal" data-bs-target="#ModalAdd_funcionario" target="_blank" title="Logar como admin"><i class="fa fa-users me-2"></i></a>
                </div>
			</div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-dark logo h1 align-self-center" href="index.php">
           	 <img class="" src="logo-red.png" width="25%">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"> <i class="fas fa-home fa-fw"></i> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php"><i class="fas fa-info fa-fw"></i> Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php#serviço"><i class="fa-solid fa-gear"></i> Serviços</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="minha_localização.php"><i class="fa-solid fa-location-dot"></i> Localizção</a>
                        </li>
						<a href="registro.php"><button class="bg-danger text-light m-2 shadow rounded-2 border-0"> Cadastre-se</button></a>
                    </ul>
					
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->
	

    <!-- Modal Dador-->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="classes/verificar-login.php">
			
			  <div class="modal-header">
			  <h4 class="modal-title" id="myModalLabel"><i class="fas fa-user-circle fa-fw"></i> Dador</h4>
				   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
			 </br>
			  <div class="modal-body">
				
				  <div class="form-group ">
					<label for="title" class="col-sm-3 control-label">Usuário:</label>
					<div class="col-sm-12">
					  <input type="text" name="email_dador" class="form-control" id="title" placeholder="Digite o seu usuário">
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-3 control-label">Senha:</label>
					<div class="col-sm-12">
					  <input type="password" name="senha_dador" class="form-control" id="end" placeholder="Digite a sua Senha">
					</div>
				  </div>
				
			  </div>
			  </br>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="entrar" title="Login"><i class="fa fa-save"></i> Entrar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		<!-- Modal Admin-->
		<div class="modal fade" id="ModalAdd_adim" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="classes/valida_login.php">
			
			  <div class="modal-header">
			  <h4 class="modal-title" id="myModalLabel"><i class="fas fa-user-circle fa-fw"></i> Admin</h4>
				   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
			 </br>
			  <div class="modal-body">
				
				  <div class="form-group ">
					<label for="title" class="col-sm-3 control-label">Usuário:</label>
					<div class="col-sm-12">
					  <input type="text" name="usuario" class="form-control" id="title" placeholder="Digite o seu usuário">
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-3 control-label">Senha:</label>
					<div class="col-sm-12">
					  <input type="password" name="senha" class="form-control" id="end" placeholder="Digite a sua senha">
					</div>
				  </div>
				
			  </div>
			  </br>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="entrar" title="Logar no Sistema"><i class="fa fa-save"></i> Entrar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
