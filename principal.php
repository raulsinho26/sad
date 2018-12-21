<?php 
	require ("conexao.php");
	session_start();
	if(!isset($_SESSION["user"]) || !isset($_SESSION["senha"])){
		header ("Location: index.php?msg=2");
	}
	$nome5 = explode(" ", $_SESSION['nome']);
	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'UTF-8');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.5.1.min.js'></script>
	<script type="text/javascript" src="javascriptpersonalizado.js"></script>
	<script type='text/javascript'>

$(document).ready(function(){
// Executa o evento CLICK em todos os links do menu
$('.div').live('click',function(){
 // Faz o carregamento da página de acordo com o COD da página, que vai pegar os valores da página page.php.
    document.querySelector("#cadSafra").addClass("current_page_item");
 $('#main').load($(this).attr('href'));
 return false;

});

});
</script>
<script>
$(document).ready(function(){
	$("#safracall").click(function(event){
	  event.preventDefault();
	  $(this).addClass("current_page_item");
	  $('#mainBack').removeClass("current_page_item");
	  $('#busca4').removeClass("current_page_item");
	  $('#cadS').removeClass("current_page_item");
	   $('#contactcall').removeClass("current_page_item");
	  $("#contato_div").hide("slow");
	  $("#busca5").hide("slow");
	  $("#main").hide("slow");
	  $("#cadSafra").hide("slow");
	  $("#safra").show("slow");
	});
	$("#cadS").click(function(event){
	  event.preventDefault();
	  $(this).addClass("current_page_item");
	  $('#mainBack').removeClass("current_page_item");
	  $('#busca4').removeClass("current_page_item");
	  $('#safracall').removeClass("current_page_item");
	   $('#contactcall').removeClass("current_page_item");
	  $("#contato_div").hide("slow");
	  $("#main").hide("slow");
	  $("#safra").hide("slow");
	  $("#busca5").hide("slow");
	  $("#cadSafra").show("slow");

	});
	$("#mainBack").click(function(event){
	  event.preventDefault();
	  $(this).addClass("current_page_item");
	  $('#cadS').removeClass("current_page_item");
	  $('#busca4').removeClass("current_page_item");
	  $('#safracall').removeClass("current_page_item");
	   $('#contactcall').removeClass("current_page_item");
	  $("#contato_div").hide("slow");
	  $("#safra").hide("slow");
	  $("#busca5").hide("slow");
	  $("#cadSafra").hide("slow");
	  $("#main").show("slow");

	});
	$("#mainBack2").click(function(event){
	  event.preventDefault();
	  $('#mainBack').addClass("current_page_item");
	  $('#cadS').removeClass("current_page_item");
	  $('#busca4').removeClass("current_page_item");
	  $('#safracall').removeClass("current_page_item");
	  $('#contactcall').removeClass("current_page_item");
	  $("#contato_div").hide("slow");
	  $("#safra").hide("slow");
	  $("#busca5").hide("slow");
	  $("#cadSafra").hide("slow");
	  $("#main").show("slow");

	});
	$("#contactcall").click(function(event){
	  event.preventDefault();
	  $(this).addClass("current_page_item");
	  $('#mainBack').removeClass("current_page_item");
	  $('#busca4').removeClass("current_page_item");
	  $('#cadS').removeClass("current_page_item");
	  $('#safracall').removeClass("current_page_item");
	  $("#safra").hide("slow");
	  $("#busca5").hide("slow");
	  $("#main").hide("slow")
	  $("#cadSafra").hide("slow");
	  $("#contato_div").show("slow");

	});

	$("#busca4").click(function(event){
	  event.preventDefault();
	  $(this).addClass("current_page_item");
	  $('#contactcall').removeClass("current_page_item");
	  $('#mainBack').removeClass("current_page_item");
	  $('#cadS').removeClass("current_page_item");
	  $('#safracall').removeClass("current_page_item");
	  $("#contato_div").hide("slow");
	  $("#safra").hide("slow");
	  $("#main").hide("slow");
	  $("#cadSafra").hide("slow");
	  $("#busca5").show("slow");

	});
 
});
</script>
 <script type="text/javascript">

 	function formatarMoeda() {
  var elemento = document.getElementById('preco');
  var valor = elemento.value;
  
  valor = valor + '';
  valor = parseInt(valor.replace(/[\D]+/g,''));
  valor = valor + '';
  valor = valor.replace(/([0-9]{2})$/g, ".$1");

  if (valor.length > 6) {
    valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ",$1.$2");
  }

  elemento.value = valor;
}
      
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<a id="mainBack2" href="#"><img src="images/logo.png" width="250px" alt="" /></a>
			<h1><a href="#">SI Auditoria</a></h1>
			<span>  Bem-Vindo, <?php echo '<b>'.$nome5[0].'</b>'; ?></span>
			<span> <h3><a href="logout.php"> Logout</a></h3></span>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item" id="mainBack"><a  href="" accesskey="1" title="">Home</a></li>
				
				
				<li id="cadS" ><a class="div"  href="" accesskey="2" title="">Cadastrar um Auditor</a></li>
				
			</ul>
		</div>
	</div>
	<div id="main"class="painel">
		<div id="banner">
			<img src="images/pic01.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2>ESSE É O MAIN</h2>
				<span class="byline">strogonoff de frango strogonoff de frango strogonoff de frango strogonoff de frango</span>
			</div>
			<p>This is <strong>STROGONOFF</strong>, strogonoff de frango strogonoff de frango <a href="http://templated.co" rel="nofollow">strogonoff de frango</a>. strogonoff de frango strogonoff de frango <a href="http://fotogrph.com/"> strogonoff</a>. strogonoff de frango strogonoff de frango <a href="http://templated.co/license">strogonoff de frango strogonoff de frango</a> strogonoff de frango strogonoff de frangostrogonoff de frango strogonoff de frangostrogonoff de frango strogonoff de frango :) </p>
			<ul class="actions">
				<li><a href="#" class="button">Etiam posuere</a></li>
			</ul>
		</div>
		<div id="featured">
			<div class="title">
				<h2>strogonoff de frango strogonoff de frango</h2>
				<span class="byline">Integer sit amet aliquet pretium</span>
			</div>
			<ul class="style1">
				<li class="first">
					<p class="date"><a href="#">Jan<b>05</b></a></p>
					<h3>Amet sed volutpat mauris</h3>
					<p><a href="#">Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Etiam non felis. Donec ut ante.</a></p>
				</li>
				<li>
					<p class="date"><a href="#">Jan<b>03</b></a></p>
					<h3>Sagittis diam dolor amet</h3>
					<p><a href="#">Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie. Donec leo, vivamus fermentum nibh in augue praesent congue rutrum.</a></p>
				</li>
				<li>
					<p class="date"><a href="#">Jan<b>01</b></a></p>
					<h3>Amet sed volutpat mauris</h3>
					<p><a href="#">Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Etiam non felis. Donec ut ante.</a></p>
				</li>
				<li>
					<p class="date"><a href="#">Dec<b>31</b></a></p>
					<h3>Sagittis diam dolor amet</h3>
					<p><a href="#">Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie. Donec leo, vivamus fermentum nibh in augue praesent congue rutrum.</a></p>
				</li>
			</ul>
		</div>
		<div id="copyright">
			<span>&copy; Untitled. All rights reserved. | Agroconecta <a href="">Corporation</a></span>
			<span>Design by <a href="" rel="nofollow">Raulzera</a>.</span>
		</div>
	</div>
	<div id="cadSafra"class="painel">
		
		<div id="welcome">
			<div class="title">
				<h2>Cadastro - Auditor</h2>
			</div>
		</div>
		<div id="featured">
			</div>
  <div class="form">
    <form name="form_cadastro" action="cadAuditor.php" method="post">
				 <label><span>DADOS GERAIS</span></label><br><br>
                    <div class="form-group">
                        <input  name="nome" type="text" class="form-control" placeholder="Nome" required="">
                    </div>
                    <div class="form-group">
                        <input  name="email" type="email" class="form-control" placeholder="Email" required="">
                    </div>
					<div class="form-group">
                        <input  name="cpf" type="cpf" class="form-control" placeholder="CPF" required="">
                    </div>
					<div class="form-group">
                        <input  name="cidade" type="cidade" class="form-control" placeholder="Cidade" required="">
                    </div>
					<div class="form-group">
                        <input  name="logradouro" type="logradouro" class="form-control" placeholder="Logradouro" required="">
                    </div>
                    <div class="form-group">
                        <input  name="telefone" type="telefone" class="form-control" placeholder="Telefone" required="">
                    </div>
					
					<hr>
					<hr>
					
					<label><span>FORMAÇÃO ACADEMICA</span></label><br><br>
					
					 <div class="form-group">
                        <input name="curso" type="text" class="form-control" placeholder="Curso1" required="">
                    </div>
                    <div class="form-group">
                        <input name="instit" type="text" class="form-control" placeholder="Instituição" required="">
                    </div>
					<div class="form-group">
                        <input name="anoc" type="text" class="form-control" placeholder="Ano Conclusão" required="">
                    </div>
					
					
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Cadastrar</button>
                    <button type="reset" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Cancelar</button>
                    
                </form>
    
  </div>
		<div id="copyright">
			<span>&copy; Untitled. All rights reserved. | Agroconecta <a href="">Corporation</a></span>
			<span>Design by <a href="" rel="nofollow">Raulzera</a>.</span>
		</div>
	</div>
	</div>
</body>
</html>
