
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
            <h1 class="h1">Minha Agenda</h1>
            <p>
                visualização das marcações agendadas, caso pretende cancelar.
				
            </p>
        </div>
    </div>


    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <?php 
							$contaAg = 0;
							$contaTb = 0;
							$selectPac = mysqli_query($conn, "SELECT * FROM paciente WHERE email_paciente = '$email_paciente'") or die(mysqli_error($conn));
							$resultPac = mysqli_num_rows($selectPac);
							while($mostraPac = mysqli_fetch_array($selectPac)) {
								$cpfPac = $mostraPac["id_paciente"];
								$selectAg = mysqli_query($conn, "SELECT * FROM agendamento WHERE ID_paciente = '$cpfPac' AND situacao = 'Em Aberto' ORDER BY Data_AgendamentoConsulta ASC") or die(mysqli_error($conn));
								$resultAg = mysqli_num_rows($selectAg);
								if($resultAg > 0){

									if($contaTb == 0){
										?>
											<center><table class="table table-hover tableAgp">
											<thead>
												<tr>
													<th>Paciente</th>
													<th>Descrição</th>
													<th>Processo</th>
													<th>Data</th>
													<th>Acção</th>
												</tr>
											</thead>
											<tbody>
										<?php
										$contaTb++;
									}									

									while($mostraAg = mysqli_fetch_array($selectAg)) {
										$ag = $mostraAg["Cod_AgendamentoConsulta"];
										$consult = $mostraAg["ID_paciente"];
										$selectConsulta = mysqli_query($conn, "SELECT * FROM agendamento WHERE Cod_AgendamentoConsulta = '$consult'") or die(mysqli_error($conn));
										$mostraConsulta = mysqli_fetch_array($selectConsulta);
										?>
											<tr>
												<td><?php echo $mostraPac["nome_paciente"]; ?></td>
												<td><?php echo $mostraAg["descricao"]; ?></td>
												<td><?php echo $mostraAg["Situacao"]; ?></td>
												<td><?php echo $mostraAg["Data_AgendamentoConsulta"]; ?></td>
												<td><form action="cancelaAg.php" method="POST">
												<button class='btn btn-danger' value="<?php echo $ag ?>" name="cancelAg">Cancelar</button>
												</form></td>
											</tr>
										<?php
									}
									$contaAg++;

								} else {

								}
							}

							if($contaAg == 0) {
								echo "<br><br><br><br><br><br><center><h3 style='color: rgba(255, 255, 255, 0.9);'>Nenhuma Pedido Feito</h3></center>";
							} else {
								echo "</tbody></table></center>";
							}
						?>
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