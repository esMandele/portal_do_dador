<?php  
	include_once("classes/conexao.php");
	session_start();
	
	if(!isset($_SESSION["email_paciente"]) || !isset($_SESSION["senha_paciente"])) {
		$_SESSION["loginErro"] = "Usuario ou Senha inválido.";
		header("Location: login.php");
		die();
	} else {
		$email_paciente = $_SESSION["email_paciente"];
	}
	
	$ag = $_POST["cancelAg"];

	$updateAg = mysqli_query($conn, "UPDATE agendamento SET Situacao = 'Cancelada' WHERE Cod_AgendamentoConsulta = '$ag'") or die(mysqli_error($conn));
	
	header("Location: minha_agenda.php");

?>