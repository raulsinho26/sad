<?php 
	require ("conexao.php");
	$user = $_POST['user'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$estado = $_POST['estado'];
	$contato = $_POST['contato'];
	$senha = md5($_POST['senha']);


	$query = "INSERT INTO usuarios (user, nome, contato, endereco, bairro, cidade, estado, email, senha) VALUES ('$user', '$nome', '$contato','$endereco','$bairro','$cidade','$estado','$email','$senha')";
	$resultado = mysqli_query($conn, $query);

	if(mysqli_affected_rows($conn) != 0){
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
		$_SESSION['endereco'] = $endereco;
		$_SESSION['cidade'] = $cidade;
		$_SESSION['bairro'] = $bairro;
		$_SESSION['estado'] = $estado;
		$_SESSION['contato'] = $contato;
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/auditoria1/principal.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/auditoria1/index.php'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
	
?>