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
                <p><h2><i>Atualizar Cadastro!</i></h2></p>
                <table>
                <form action="atualizar_foto.php" method="post" name="atuallizafoto" target="_blank" enctype="multipart/form-data" >
                	
                    	<tr>
 						<td></td>
    					<td><label for="documento"> RG: </label></td>
    					<td align="left"><input type="text" name="rg" required placeholder="Sem pontos e traço" maxlength="9" autocomplete="off"></td>
    					</tr>
                   		<tr>
    					<td></td>
   						<td><label for="foto"> Foto: </label> </td>
   						<td align="left"><input type="file" name="input" required></td>
    					</tr>
                            <td></td>
							<td><label for="envio">  </label> </td>
    						<td align="left"><input type="submit"  value="Atualizar"/> <input type="reset" value="Limpar" class="vista"></td>
    						</tr>           	
                	
                </form>
              		<tr>
                    <td></td>
                	<td></td>
                	<td align="left"><p> Ou </p></td>
                <form action="atualizar_empresa.php" method="post" name="atuallizaEmpresa" target="_blank" >
                	
                    	<tr>
 						<td></td>
    					<td><label for="documento"> RG: </label></td>
    					<td align="left"><input type="text" name="rg" required placeholder="Sem pontos e traço" maxlength="9"></td>
    					</tr>
                   		<tr>
    					<td></td>
   						<td><label for="foto"> Empresa: </label> </td>
   						<td align="left"><input type="text" name="empresa" required placeholder="" autocomplete="off"></td>
    					</tr>
   						<tr>
                        <td></td>
    					<td><label for="envio">  </label> </td>
    					<td align="left"><input type="submit"  value="Atualizar"/> <input type="reset" value="Limpar" class="vista"></td>
    					</tr>                                       	
                	
                </form>
                </table>
    		</fieldset>
                    			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
    	</div>
	</body>
</html>