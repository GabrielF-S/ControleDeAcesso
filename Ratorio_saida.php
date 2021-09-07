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
                <p><h2><i>Saida registrada!</i></h2></p>
               
                <?php
				
					$strcon = mysqli_connect('localhost:3307','root','usbw','mydb') or die ("Erro ao conectar ao Banco de Dados");				
					
					$str = "SELECT cadastros.RG, cadastros.nome,  cadastros.empresa,  visitas.motivo,  visitas.entrada, visitas.saida FROM cadastros, visitas WHERE cadastros.RG=visitas.Cadastros_RG AND visitas.saida IS NOT NULL ORDER BY visitas.saida DESC LIMIT 1 ";
					
					$resultado1 = mysqli_query($strcon, $str);
				echo "<br><br>";
				echo "<table cellpadding='3'>";
					while($linha = mysqli_fetch_row($resultado1) )
        				{
												$sql	="SELECT Foto FROM cadastros WHERE RG='$linha[0]'";	 
 					$resultado2 = mysqli_query($strcon, $sql);
	
					$sth = $strcon->query($sql);
					$result=mysqli_fetch_array($sth) or die ("Cadastro não localizado") ;
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['Foto'] ).'" width="250px" height="250px" alt="Imagem não localizada"/>';
					echo "<br><br>";
					
					echo "<tr><td align='left'>RG: </td><td align='left'> Nome: </td><td align='left'> Empresa: </td><td align='left'>Motivo: </td><td align='left'>Entrada: </td><td align='left'>Saida: </td>";
          					echo "<tr><td>". $linha[0] . " |</td><td>" . $linha[1] . " |</td><td>" . $linha[2] . " |</td><td>" . $linha[3] . " |</td><td>" . $linha[4] . " |</td><td> ". $linha[5]  .  " |</td></tr></table>";
       					 
						 

					
						}
					mysqli_free_result($resultado1);
					mysqli_close($strcon);	
					
					
					echo "<input type='submit' name='submit' value='Fechar' onClick='window.close();'>";				 
				
				?>
                <br>
                <br><br>
               
                
    		</fieldset>
    	</div>
	</body>
</html>