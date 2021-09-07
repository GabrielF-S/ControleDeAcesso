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
                <p><h2><i>Relatório de Saida!</i></h2></p>
               
                <?php
				$limite	=	$_POST['limit'];
				
					$strcon = mysqli_connect('localhost:3307','root','usbw','mydb') or die ("Erro ao conectar ao Banco de Dados");				
					
					$str = "SELECT cadastros.RG, cadastros.nome, cadastros.sobrenome, cadastros.empresa, visitas.motivo, visitas.entradaDia, visitas.entradaHora, visitaS.saidaDia, visitas.saidaHora FROM cadastros, visitas WHERE  visitas.saidaDia= '$limite' AND cadastros.RG = visitas.Cadastros_RG; ";
					
					$resultado1 = mysqli_query($strcon, $str);
				echo "<br><br>";
				echo "<table cellpadding='3' border='2' class='relatorio'>";
					echo "<tr><td align='left'>RG: </td><td align='left'> Nome: </td><td align='left'> Sobrenome: </td><td align='left'>Empresa: </td><td align='left'>Motivo: </td><td align='left'>Entrda: </td><td align='left'>Saida: </td>";				
					while($linha = mysqli_fetch_row($resultado1) )
        				{
					/*							$sql	="SELECT Foto FROM cadastros WHERE RG='$linha[0]'";	 
 					$resultado2 = mysqli_query($strcon, $sql);
	
					$sth = $strcon->query($sql);	
					$result=mysqli_fetch_array($sth) or die ("Cadastro não localizado") ;
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['Foto'] ).'" width="250px" height="250px" alt="Imagem não localizada"/>'; */
					//echo "<br><br>";
					

          					echo "<tr><td align='left'>". $linha[0] . " </td><td align='left'>" . $linha[1] . " </td><td align='left'>" . $linha[2] . " </td><td align='left'>" . $linha[3] . " </td><td align='left'>" . $linha[4] . " </td><td align='left'> ". $linha[5] . " - " . $linha[6] .  " </td><td> ". $linha[7] . " - " . $linha[8] ."</td></tr>";
       					 
						 

					
						}
						echo "</table>";
					mysqli_free_result($resultado1);
					mysqli_close($strcon);	
					
					echo "<br>";
					echo "<input type='submit' name='submit' value='Fechar' onClick='window.close();'>";				 
				
				?>
                <br>
                <br><br>
               
                
    		</fieldset>
    	</div>
	</body>
</html>