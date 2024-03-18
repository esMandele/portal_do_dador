
<?php 
	include_once("classes/acesselogin.php");
	
	$sql_pacient = "SELECT * FROM paciente WHERE email_paciente = '$email_paciente'";
    $result_pacient = mysqli_query($conn, $sql_pacient);
	
	$sql_consulta = "SELECT * FROM consulta";
    $result_consulta = mysqli_query($conn, $sql_consulta);
	
include_once 'heade_2.php';

?>

    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Marcação de Consulta</h1>
            <p>
                Preencha o formulário para marcação e será contactado via telefone.
				
            </p>
        </div>
    </div>


    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
		<?php 
			    if(isset($_SESSION['status']) && $_SESSION['status'] !='' ){
			               echo '<h2 class="bg-danger text-white">' .$_SESSION['status'].'</h2>';
                           unset($_SESSION['status']);
				        }
				          ?>
            <form class="col-md-9 m-auto" method="post" action="classes/valida-marcacao.php" role="form">
                <div class="row">
				
                    <div class="form-group col-md-6 mb-3">
                       <select class="form-control" name="id_paciente" >
						  <option value="NULL" selected>Selecionar Paciente...</option>
							<?php
                                 while ($dados_pacient = mysqli_fetch_array($result_pacient)) {
                                     ?>
                                   <option value="<?php echo $dados_pacient['id_paciente']; ?>">
                                     <?php
                                        echo $dados_pacient['nome_paciente'];
                                         ?>
                                         </option>
                                       <?php
                                      }
                                    ?>
								</select>
							</div>
                    <div class="form-group col-md-6 mb-3">
                        <select class="form-control" id="viatura" name="id_consulta">
								<option value="NULL" selected>Selecionar a Especialidade...</option>
						           <?php
                                    while ($dados_consulta = mysqli_fetch_array($result_consulta)) {
                                    ?>
                                    <option value="<?php echo $dados_consulta['id_consulta']; ?>">
                                   <?php
                                   echo $dados_consulta['tipo_consulta'];
                                   ?>
                                  </option>
                               <?php
                              }
                            ?>
						</select>
					</div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Data</label>
                    <input  name="Data_AgendamentoConsulta" class="form-control datepicker" data-date-format="yyyy-mm-dd" placeholder="Digite a data" id="nc" required>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Descrição</label>
                    <textarea class="form-control mt-1" id="message" name="descricao" placeholder="Situação...O que estas a sentir neste momento..." rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-primary btn-lg px-3" name="cadastrar_agendamento">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->


   <?php
include_once 'footer.php';
?>

<!-- Parte da data -->
 <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	  <script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
      });
		</script>