function formataTelefone(){

	var valor = formcad.telefone.value;

	if (valor.length == 0) {

		valor = valor + "("
	}

	if (valor.length == 3) {

		valor = valor + ")"
	}

	if (valor.length == 8) {

		valor = valor + "-"
	}

	formcad.telefone.value = valor;
}

function ValidaEmail(){

	var email  = formcad.email.value;

	if((email.indexOf(" ")!= -1) ||
	   (email.indexOf("@.")!= -1) || 
	   (email.indexOf("@")== -1) ||
	   (email.indexOf("@") == email.length-1) ||
	   (email.indexOf("@") < 1 ) ||
	   (email.lastIndexOf(".") < email.indexOf("@") )||
	   (email.lastIndexOf(".") == email.length-1)){
		window.alert("Erro: Seu endereço de email não está correto !!");
        //formcad.email.focus();
	}
}

function Valida(){
	
	if((formcad.nome.value =="") ||
	   ((formcad.telefone1.value =="") && (formcad.telefone2.value =="")) ||
	   (formcad.email.value =="") ||
	   (formcad.senha.value =="") ||
	   (formcad.senha2.value =="") ||
	   (formcad.endereco.value =="") ||
	   (formcad.bairro.value =="") ||
	   (formcad.cidade.value =="") ||
	   ((formcad.sexo[0].checked == false) && (formcad.sexo[1].checked == false))){

	   	window.alert("Erro: existem um ou mais campos vazios !!");
	}
}

function ComfirmaSenha(){

	var sen1 = formcad.senha.value;
	var sen2 = formcad.senha2.value;

	if(sen1 != sen2){
        window.alert("Confirmação de senha incorreta: Digite novamente");
        formcad.senha2.focus();
	}
}

