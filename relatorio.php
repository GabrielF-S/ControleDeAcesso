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
                <p><h2><i>Relatório de Visitas!</i></h2></p>
                <form action="Relatorio-de-visitas.php" method="post" name="relatorio" target="_blank" >
                	<table>
                		<tr>
         
                        	<td><label for="motivo">Numero de registros: </label></td>
                            <td align="left"><input type="number" name="limit" required /> </td>
                        </tr>
                        <tr>
                        	<td><label for="orgamizar">Organizar por:</label></td>
                            <td align="left"> <input type="radio" name="visita" value="visitas.entrada" required>Entrada <br><input type="radio" name="visita" value="visitas.saida">Saida</td>
						</tr>                        
                        <tr>
                        	<td></td>
                            <td align="left"><input type="submit" value="Pesquisar" class="visita"> </td>
                           
						</tr>
                         </form>
                         <tr><td><br></td></tr>
                         <tr><td></td><td><h3>Ou</h3></td></tr>
                         <tr><td><br></td></tr>
                          <form action="Relatorio-de-visitas2.php" method="post" name="relatorio" target="_blank" >
                          <tr>
         
                        	<td><label for="dia">Selecione o dia: </label></td>
                            <td align="left"><input type="date" name="limit" required /> </td>
                        </tr>
                        <tr>
                        	<td><label for="orgamizar">Organizar por:</label></td>
                            <td align="left"> <input type="radio" name="visita" value="visitas.entrada" required>Entrada <br><input type="radio" name="visita" value="visitas.saida">Saida</td>
						</tr>                        
                        <tr>
                        	<td></td>
                            <td align="left"><input type="submit" value="Pesquisar" class="visita"> </td>
                            
						</tr>
                	</table>
                </form>
    		</fieldset>
            			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
    	</div>
	</body>
</html>