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
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:contacto@portaldodador.com.ao">contacto@portaldodador.com.ao</a>  
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

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner shadow">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <h1 class="display-4 text-danger m-5 text-justify">Seja um dador!</h1>
                        <p class="p ">A sua <strong>acção</strong> provoca reacções <strong>positivas</strong> na vida
                            de muitas pessoas.</p>
                        <a href="#" class="main-btn"><button
                                class="text-light bg-danger rounded-2 border-0 p-2 m-auto">Fazer doação</button></a>

                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <img class="img-fluid" src="doação-transf-750.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <h1 class="display-4 text-danger m-5">Doe hoje, salve hoje</h1>
                        <p>Doe sangue, multiplique essa <strong>atitude!</strong> A doação de sangue não tem preferência
                            de raça ou etnia .</p>
                        <a href="#cadastro.php"><button class="text-light bg-danger rounded-2 border-0 p-2 m-auto">Fazer
                                doação</button></a>
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <img class="img-fluid" src="bd2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <h1 class="display-4 text-danger m-5">Seja um exemplo</h1>
                        <p>Doar <strong>sangue</strong> é fácil, basta <strong>esticar o braço</strong>.</p>
                        <a href="#cadastro.php" class="main-btn"><button
                                class="text-light bg-danger rounded-2 border-0 p-2 m-auto">Fazer doação</button></a>
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <img class="img-fluid" src="blood-donor-700.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- BENEFICIOS -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div id="beneficios" class="col-lg-6 m-auto">
            <h3 class="display-4 text-primary text-uppercase">Beneficios</h3>
            <span class="display-6 m-2 py-2"> Falamos sobre doar sangue </span>
        </div>
    </div>    
    <div class="col-lg-6-m-auto py-2">
       <img src="blood-donation.png" alt="" class="img ms-3 float-end">
       <p>Cada vez está mais presente nos meios de comunicação e cada vez mais as autoridades de saúde tentam nos conscientizar e, é preciso levar em conta que pode doar sangue, qualquer pessoa que esteja saudável, que tenha entre 18 e 65 anos, e que pese mais de 50 quilos, já que se colhe uma quantidade padrão para todos os doadores, que é de 450 ml. Para fazer uma doação não é necessário estar em jejum, ao contrário do que acontece quando fazemos um exame de sangue. Você também pode doar sangue, embora tenha o colesterol elevado e, embora esteja tomando alguns dos medicamentos mais frequentes.</p>
               
            
        <p class="lead">Certamente, doar sangue é um ato de altruísta, de generosidade. Sem dúvida alguma para ajudar outras pessoas, precisamos de uma limpeza do interior e estabilizar os níveis de ferro e diminuir os riscos de sofrer um ataque cardíaco. Acredita-se que uma doação pode chegar a salvar entre 5 e 18 vidas, e é crucial para pessoas que sofrem de câncer, fraturas, doenças do sangue, inclusive em cirurgias, partos complicados e pacientes com anemia. Vamos examinar as dez vantagens e benefícios de doar sangue.</p>

        <p>Dentre os inúmero beneficois de de doar sangue passamos a citar:</p>
        <dl>
            <dt><i style="color: #0085ff;" class="fa-solid fa-circle-chevron-right"></i> Equilibra os níveis de ferro em nosso organismo</dt>
            <dd>O ferro é parte importante do organismo, dentro da hemoglobina, que é a que transporta oxigênio para os tecidos.  Para cada vez em que doamos sangue, perdemos um quarto de grama de ferro, algo que não é ruim, ao contrário do que pode parecer, já que os níveis elevados de ferro podem ser piores e são mais frequentes, do que quando temos excesso de ferro. Este benefício é ainda mais importante em mulheres pré-menopáusicas, já que ajuda a reduzir a possibilidade de ter um ataque cardíaco;</dd>
            <dt><i style="color: #0085ff;" class="fa-solid fa-circle-chevron-right"></i> Melhora o fluxo sanguíneo</dt>
            <dd>Doar sangue nos ajuda a evitar a hipercoagulação, que pode gerar à ruptura dos nossos vasos sanguíneos, já que existem agentes que podem fazer coagular o sangue como tabaco, estresse ou excesso de açúcar em nossa dieta;</dd>
            <dt><i style="color: #0085ff;" class="fa-solid fa-circle-chevron-right"></i> Nos dá informações sobre a nossa saúde</dt>
            <dd>As doações nos dão informações valiosas sobre a nossa saúde, já que supõe uma revisão do nosso organismo. É examinado se temos determinadas doenças infecciosas e nos informa sobre os níveis de hemoglobina, pressão arterial, temperatura e pulso;</dd>
            <dt><i style="color: #0085ff;" class="fa-solid fa-circle-chevron-right"></i> Melhora o estado emocional</dt>
            <dd>O maior benefício é o emocional. E doar sangue, sem dúvida, melhora o estado emocional. A satisfação imediata que se sente pode gerar uma grande felicidade. Você sabe que não apenas está melhorando a sua qualidade de vida, mas também que está ajudando outras pessoas. Tudo isso faz com que você se sinta bem e te permite liberar o estresse gerado ao longo dos últimos tempos.</dd>
            </dl>              

        <div id="beneficios_img" class="container text-center">
            <figure class="figure">
                 <img src="people-blood.jpg" alt="" class="img-thumbnail ms-3 fl">
                <figcaption class="figcaption text-end">Voluntários da Cruz Vermelha doando sangue.</figcaption>
            </figure> 
        </div>
            
    </div>
</section>

<!-- FQA -->
<section class="container py-3">
    <span id="fqa" class="display-4 text-center text-primary text-uppercase m-4">Pergutas frequentes</span>
    <div class="accordion accordion-flush p-4" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
         <strong>Quem pode doar sangue?</strong> 
          </button>
        </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>R: De forma geral, qualquer pessoa entre <strong>18 e 69</strong> anos que pese mais do que <strong>50 kg</strong> e esteja em <strong>boas condições de saúde </strong> pode realizar a doação.</p></div>
            </div>
      </div>
        <div class="accordion-item">
         <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          <strong>Quais são os tipos sanguíneos?</strong>
          </button>
         </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>R: Os tipos sanguíneos são <strong>A, B, AB e O,</strong>  podendo ter o Rh classificado como <strong>positivo ou negativo</strong>.</p></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            <strong>Qual tipo de sangue é mais valioso que o outro?</strong> 
            </button>
         </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>R: <strong><em>O</em> positivo </strong>é o tipo de sangue mais comum, para cerca de <strong>39 por cento da população</strong>  e, portanto, o mais provável para ser necessário para uma transfusão. <strong>Tipo <em>A</em> positivo</strong> é o segundo colocado com <strong>31 por cento da população</strong>. O tipo de sangue <strong><em>O</em> negativo</strong> está em cerca de <strong>9 por cento das pessoas</strong>, e são considerados doadores universais, pois seu sangue pode ser doados a qualquer pessoa.</p></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            <strong>De quanto em quanto tempo pode doar sangue?</strong> 
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>R: Os <strong>Homens</strong> podem doar a cada 60 dias, e as <strong>Mulheres</strong> podem doar a cada 90 dias.</p></div>
          </div>
        </div>
        
        <a href="perguntasFreq.php" class="main-btn"><button class="text-light bg-danger rounded-2 border-0 p-2 m-auto">Saber mais</button></a>
</section>
<!-- END FQA -->


<?php
include_once 'footer.php';
?>
