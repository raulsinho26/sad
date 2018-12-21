<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Auditoria</title>
  
      <link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />

      <script src="jquery.js"></script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
        $(function(){ // declaro o início do jquery
            $("input[name='user']").blur( function(){  

                        var nomeUsuario = $("input[name='user']").val();
                        var error = document.querySelector('#resposta');
                        //alert(nomeUsuario);

                        $.post('resultado.php',{nomeUsuario: nomeUsuario},function(data){
                               if( data!='Não existe ainda!' ){ 
                      error.innerHTML = "Usuário já cadastrado, informe um novo";
                      $("input[name='user']").val('');//apagando o input
                      $("input[name='user']").focus();
                      $("#resposta").removeClass("green");
                      $("#resposta").addClass("resposta");
                  }else{
                    error.innerHTML = "Usuário Ainda não Cadastrado, pode prosseguir";
                    $("#resposta").removeClass("resposta");
                     $("#resposta").addClass("green");
                  }

                        });
                });
        });// fim do jquery
</script> 
    

      <script type="text/javascript">
      function validar_login(){
        var usuario = form_login.usuario.value;
        var senha = form_login.senha.value;
        if(usuario == "" || usuario.length < 4){
          alert("Um usuário válido deve ter pelo ou menos 4 caracteres");
          form_login.usuario.focus();
          return false;
        }if(senha == "" || senha.length < 4){
          alert("Uma senha válida tem pelo ou menos 4 caracteres");
          form_login.senha.focus();
          return false;
        }
      }
    </script>
<script>
    function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
  return document.getElementById( el );
}
window.onload = function(){
  id('telefone').onkeyup = function(){
    mascara( this, mtel );
  }
}
</script>

  
</head>

<body>
  
  <div class="login-page">
    <img id="logo" src="images/logo.png" alt="AGROCONECT">
  <div class="form">
    <form name="form_cadastro" action="cadastro.php" id="form_cadastro" class="register-form" method="post">
      <input type="text" required="required" name="user" id="user" placeholder="Usuário"/>
      <span id="resposta"></span>
      <br><br>
      <input type="text" required="required" name="nome" placeholder="Nome Completo"/>

      <input type="password" required="required" name="senha" placeholder="Senha"/>
      <input type="password" required="required" name ="confirma" placeholder="Confirme sua senha"/>
      <input type="email" name="email"  required="required" placeholder="exemplo@exemplo.com" onblur="validarEmail()" onfocus="redefinirMsg()" id="email"/>
      <span id="error-email"></span>
      <input type="text" required="required" name = "endereco" placeholder="Endereço"/>
      <input type="text" required="required" name = "bairro" placeholder="Bairro"/>
      <input type="text" required="required" name="cidade" placeholder="Cidade"/>
      <select name="estado" required="required" type="text"/>
      <option value=""  selected="selected"> Selecione seu Estado </option>
      <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
    </select>
      <input type="text" required="required" maxlength="15" name="contato" id="telefone" placeholder="(xx)xxxxx-xxxx"/>

      <input id="cadastrar" type ="submit" value="Cadastrar" >
      <p class="message">Já tem um Cadastro? <a href="#">Logue-se</a></p>
    </form>
    



    <form name="form_login"id="form_login" class="login-form" method="post" action="login.php">
      <input name="usuario" required="required" type="text" placeholder="Usuário"/>
      <input name="senha"  required="required" type="password" placeholder="Senha"/>
      <input id="logar" type ="submit" value="Login" onclick="return validar_login()">
      <p class="message">Ainda não é cadastrado? <a href="#">Crie sua conta</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
