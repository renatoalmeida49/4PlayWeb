function validaCampos()
	{
		if(document.getElementById('nome').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('nome').focus();
				return false;
			}
		if(document.getElementById('login').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('login').focus();
				return false;
			}
		if(document.getElementById('senha').value == '' || document.getElementById('senha').value != document.getElementById('confirmaSenha').value)
			{
				alert('Por favor, as senhas não conferem, por favor, redigite.');
				document.getElementById('senha_usu').focus();
				return false;
			}
	}