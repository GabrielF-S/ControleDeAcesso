<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="CSS.css" rel = "stylesheet" style = "text/css">
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

				<p><h2><i>Consultar</i></h2></p>
                
                <form action="consulta2.php" method="post" name="consultar">
					<table align="center" cellpadding="1" class="botao">
                    	<tr>
                        	<td><label for="rg">RG: </label></td>
                            <td align="left"><input type="text" name="rg" required class="" maxlength="9" autocomplete="off"></td>                        
                        
                            <td align="left"><input type="submit" value="Consultar" class="botaoConsulta"></td>
                        </tr>
					</table>
                    
                </form>
				


</fieldset>
        			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
</div>
</body>
</html>