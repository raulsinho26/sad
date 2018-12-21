<?php 
	require ("conexao.php");
	$user = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE user = '$user' AND senha = '$senha'");
	$row = mysqli_num_rows($query);
	if ($row > 0){
		$row2 = mysqli_fetch_array($query);
		session_start();
		$_SESSION['nome'] = $row2['nome'];
		$_SESSION['id'] = $row2['id'];
		$_SESSION['endereco'] = $row2['endereco'];
		$_SESSION['contato'] = $row2['contato'];
		$_SESSION['email'] = $row2['email'];
		$_SESSION['user'] = $_POST['usuario'];
		$_SESSION['senha'] = $senha;
		header('Location: principal.php');
	}else{
		header('Location: index.php?msg=1');
	}
?>