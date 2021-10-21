<html>
  <head>
  	<meta charset="UTF-8">
    <title>Entre em contato</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
<body>
<div id="corpo">
        <form name="frmLogin">    
                <div id="login" class="content">
                <img src="img/foto_minha.jpeg" width="85px">
                <center>
                <h2>Bem-vindo(a) ao Carro Céu </h2>
                </center>
                <input type="text" name="nome" value="Nome" class="login"><br> <br>
                <input type="text" name="email" value="E-mail" class="login"><br><br>
                <input type="textarea" name="mensagem" value="Mensagem" class="login" style="width: 300px;" style="height: 100px;"><br> <br>
                
             
                
                <button name="enviar" class="bottom" id="btnEnviar" value="Enviar">ENVIAR</button>
               <!-- <a href="teste.php"><button name="teste" class="bottom">TESTE</button></a> -->


                </div>
        </form>        


</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$("#btnEnviar").click(function() {
			var url   = "section04Content.php";
			var dados = $("#frmLogin").serialize();
			$.post( url, dados, function( responseText ) {
				// $("#sct02" ).html( responseText );
				var objResponse = JSON.parse( responseText );
				var outText = "Status da Autenticação:"+objResponse.login+"<br>"+"Mensagem:"+objResponse.message;  
				$("#sct02" ).html( outText);
				console.log( objResponse );
			} );
		});
	});
</script>