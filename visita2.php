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
                <p><h2><i>Registrar visita!</i></h2></p>
                <form action="Receber Visita_entrada2.php" method="post" name="visita" target="_blank">
                	<table>
                		<tr>
                        	<td><label for="rg">RG: </label></td>
                            <td align="left"><input type="text" name="rg" required maxlength="9" autocomplete="off"></td>
                        </tr>                        <tr>
                        	<td><label for="entrada">Entrada: </label></td>
                        	<td align="left"><input type="date" name="dia"  required> <input type="time" name="hora" required></td>
                        </tr>
                        
                        <tr>
                        	<td><label for="motivo">Motivo: </label></td>
                            <td align="left"><input type="text" name="motivo" required class="areadetexto" /> </td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td align="left"><input type="submit" value="Registrar" class="visita"> <input type="reset" value="Limpar" class="vista"></td>
                            
						</tr>
                	</table>
                </form>
    		</fieldset>
                    			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
    	</div>
	</body>
</html>