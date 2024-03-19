<?php
include_once 'header.php';
?>

<link rel="stylesheet" href="style.css">
    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Cadastrar-se</h1>
            <p>
                Criar nova conta para agendar as doações.
            </p>
        </div>
    </div>


    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form" action="classes/valida-utente.php">
                <div class="row">
					<?php 
					
				       if(isset($_SESSION['status']) && $_SESSION['status'] !='' ){
			          echo '<h2 class="bg-danger text-white">' .$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
				 }
		     ?>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Nome Completo</label>
                        <input type="text" class="form-control mt-1" id="name" name="nome_paciente" placeholder=" Digite o Nome Completo">
                    </div>
					 <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Data de Nascimento</label>
                        <input type="date" class="form-control mt-1" id="name" name="data_nasc_paciente">
                    </div>
		 <div class="form-group col-md-6 mb-3">
                        <label for="inputname">BI</label>
                        <input type="text" class="form-control mt-1" id="name" name="bi_paciente" placeholder="Digite o numero do BI">
                    </div>
			
		<div class="form-group col-md-6 mb-3">
			<label for="inputsubject">Gêneroo</label>
                         <select class="form-control mt-1" name="genero_dador" >
                           <option>Selecione o Genero</option>
                            <option value="Femenino">Femenino</option>
                          <option value="Masculino">Masculino</option>
                       </select>
		</div>
		<div class="form-group col-md-6 mb-3">
                        <label for="inputname">Endereço</label>
        	        <input type="text" class="form-control mt-1" id="endereco" name="endereco_paciente" placeholder=" Digite o Endereço">
                 </div>
		<div class="form-group col-md-6 mb-3">
                        <label for="inputname">Telefone</label>
                        <input type="text" class="form-control mt-1" id="telefone" name="telefone_paciente" placeholder=" Digite o Numero">
            	</div>	
		<div class="form-group col-md-6 mb-3">
                        <label for="inputname">Senha</label>
                        <input type="password" class="form-control mt-1" id="senha" name="senha_paciente" placeholder=" Digite o Senha">
                </div>
                    <div class=" mb-3">
                        <label for="inputemail">E-mail</label>
                        <input type="email" class="form-control mt-1" id="email" name="email_paciente" placeholder="Digite o E-mail">
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-primary btn-lg px-3" name="cadastrar_utente">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->


   <?php
include_once 'footer.php';
?>
