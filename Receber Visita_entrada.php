<!DOCTYPE html>
<html>
	<head>
		<link href="CSS.css" rel = "stylesheet" style = "text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Controle de Fluxo</title>
	</head>

	<body>
    	<div align="center">
    		<fieldset>
                    <table class = "menu" >
     					<tr> <!--botões de navegação-->
        					<td><p align = "center"><a href = "index.php">Home</a></p></td>
       						<td><p align = "center"><a href="visita.php" >Visita</a></p></td>
       						<td><p align = "center"><a href = "cadastro.php">Cadastro</a></p></td>
       						<td><p align = "center"><a href="consulta.php">Consulta</a></p></td>
               				<td><p align = "center"><a href = "relatorio.php">Relatório</a></p></td>
       						<td><p align = "center"><a href = "atualizar.php">Atualizar</a></p></td>

      					</tr>
   					 </table>

        <br>
            	<img src="IMG/Logo.png"/>
                <br>
    <?php
    $rg	=	$_POST['rg'];
	$entrada	= $_POST['entrada'];	
	$motivo	=	$_POST['motivo'];
	
	
	
	$strcon = mysqli_connect('localhost:3307','root','usbw','mydb')  or die(' Erro ao conectar com o Banco de Dados');
	$sql = "INSERT INTO visitas (Cadastros_RG, entrada, motivo) VALUES ('$rg','$entrada','$motivo')";
	
	$resultado = mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar visita <br><br><br> <input type='submit' name='submit' value='Fechar' onClick='window.close();'>	");
	
	mysqli_close($strcon);
	header("Refresh: 1;url=Receber Visita_saida.php");
	
    		
            
    ?>	</fieldset>
                    			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p>
            <h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
    	</div>
	</body>
</html>