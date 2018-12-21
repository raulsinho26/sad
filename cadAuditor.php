<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$logradouro = $_POST['logradouro'];
$telefone= $_POST['telefone'];
$anoc= $_POST['anoc'];
$intit= $_POST['instit'];
$curso1= $_POST['curso'];






$insert = "INSERT INTO auditor (nome, email, cpf, cidade, logradouro, telefone, curso1, instituicao1, anoc) VALUES
								   ('$nome','$email','$cpf','$cidade','$logradouro','$telefone', '$curso1', '$intit', '$anoc')";
									
$result = mysqli_query($conn, $insert) or die ("Falha na execução da consulta para inserir registro");
	if(mysqli_affected_rows($conn) != 0){
		session_start();
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/auditoria1/principal.php'>
					<script type=\"text/javascript\">
						alert(\"Auditor cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/auditoria1/index.php'>
					<script type=\"text/javascript\">
						alert(\"O Auditor não foi cadastrado com Sucesso.\");
					</script>
				";	
			}

?>