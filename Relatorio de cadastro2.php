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

				<p><h2><i>Cadastro Realizado com Sucesso!</i></h2></p>

				<?php
     

					$strcon =mysqli_connect('localhost:3307','root','usbw','mydb') or die(' Erro ao conectar com o Banco de Dados');
					$select = "SELECT Nome, Sobrenome, RG, Empresa FROM cadastros ORDER BY idVisitantes DESC Limit 1 ";
	
					$resultado1 = mysqli_query($strcon, $select);
					while($linha = mysqli_fetch_row($resultado1))
        				{
          					echo "<p>". $linha[0] . "  " . $linha[1] . " - " . $linha[2] . " - " . $linha[3] . " : " ."<br>" .  "</p>";
       					 }
	
					$sql	="SELECT Foto FROM cadastros ORDER BY idVisitantes DESC Limit 1 ";
 					$resultado2 = mysqli_query($strcon, $sql);
	
					$sth = $strcon->query($sql);
					$result=mysqli_fetch_array($sth);
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['Foto'] ).'" width="250px" height="250px"/>'; /*
	
	$tipo= mysql_result($resultado,0, "tipo");
	$conteudo= mysql_result($resultado, 0, "conteudo");
	header("Content-type:$tipo");
	print $conteudo;
	
	
	
			/*
	/*echo '<a href="ver_imagem.php?id='.$arquivos['Foto'].'"target=_blank>Imagem '.$arquivos['Foto'].'</a>';
     
	while($linha = mysqli_fetch_row($resultado))
        {
          echo "<p>". $linha[0] . " - " . $linha[1] . " - " . $linha[2] . " - " . $linha[3] . " - " ."<br>" . $linha[4].  "</p>";
        }
	
*/
					mysqli_free_result($resultado1);
					mysqli_close($strcon);
				echo "<br><br>";
				echo "<input type='submit' name='submit' value='Fechar' onClick='window.close();'>";

	//header("Refresh: 7;url=visita.php");

?>

				?>



			</fieldset>
		</div>
        			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
	</body>
</html>