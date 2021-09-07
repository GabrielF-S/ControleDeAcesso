<!DOCTYPE html>
<html>
	<head>
		<link href="CSS.css" rel = "stylesheet" style = "text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Controle de Fluxo</title>
	</head>

	<body>
    	<div align="center">
    		<fieldset class="saida">
            	<img src="IMG/Logo.png"/>
                <br>
                <p><h2><i>Registrar saida!</i></h2></p>
               
                <?php
				
					$strcon = mysqli_connect('localhost:3307','root','usbw','mydb') or die ("Erro ao conectar ao Banco de Dados");				
					
					$str = "SELECT cadastros.RG, cadastros.nome,  cadastros.empresa,  visitas.motivo,  visitas.entrada, visitas.idVisita FROM cadastros, visitas WHERE cadastros.RG=visitas.Cadastros_RG ORDER BY idVisita DESC LIMIT 1 ";
					
					$resultado1 = mysqli_query($strcon, $str);
				echo "<br><br>";
				echo "<table>";
					while($linha = mysqli_fetch_row($resultado1) )
        				{
					$sql	="SELECT Foto FROM cadastros WHERE RG='$linha[0]'";	 
 					$resultado2 = mysqli_query($strcon, $sql);
	
					$sth = $strcon->query($sql);
					$result=mysqli_fetch_array($sth) or die ("Cadastro não localizado") ;
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['Foto'] ).'" width="250px" height="250px" alt="Imagem não localizada"/>';
							
          					echo "<p><tr><td> RG: ". $linha[0] . "</td><td> Nome: " . $linha[1] . "</td><td> Empresa: " . $linha[2] . " </td><td> Motivo: " . $linha[3] . "</td><td> Entrada: " . $linha[4] . "</td><td>ID: " . $linha[5] . "<br>" .  "</td></tr></p></table>";
       					 
						 

						}
						
					mysqli_free_result($resultado1);
					mysqli_close($strcon);					 
						
				?>
                <br>
                <br><br>
               
                 <form action="Inserir_dados_saida.php" method="post" name="visita">
                	<table>
						<tr>
                        	<td><label for="id">ID:</label></td>
                            <td align="left"><input type="text" name="ID" required class="id" autocomplete="off"></td>
                        </tr>
                         <tr>
                        	<td><label for="entrada">Saida: </label></td>
                        	<td align="left"><input type="datetime-local" name="saida" required></td>
                        </tr>
                        
                        <tr>
                        	<td></td>
                            <td align="left"><input type="submit" value="Registar" class="visita">                             
						</tr>
                	</table>
                </form>
    		</fieldset>
             <p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
    	</div>
        			
	</body>
</html>