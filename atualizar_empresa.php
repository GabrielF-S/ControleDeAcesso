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
        <br>
        <p><h2><i>Atualizado!</i></h2></p>
<?php
	$documento	=	$_POST['rg'];
	$empresa	=	$_POST['empresa'];

	
	$strcon =mysqli_connect('localhost:3307','root','usbw','mydb') or die(' Erro ao conectar com o Banco de Dados');
	$str = "UPDATE cadastros SET empresa ='$empresa' WHERE RG ='$documento'  ";
	$resultado = mysqli_query($strcon, $str) or die("Erro ao tentar Atualizar Empresa");
	
   
    $consulta = "SELECT RG, nome, sobrenome, empresa FROM cadastros WHERE RG='$documento'";
   	$resultado2=mysqli_query($strcon, $consulta);

   
   
   
   echo "<br><br>";
		
					while($linha = mysqli_fetch_row($resultado2) )
        				{
					$sql	="SELECT Foto FROM cadastros WHERE RG='$documento'";	 
 					$resultado3 = mysqli_query($strcon, $sql);
	
					$sth = $strcon->query($sql);
					$result=mysqli_fetch_array($sth) or die ("Cadastro não localizado") ;
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['Foto'] ).'" width="250px" height="250px" alt="Imagem não localizada"/>';
							
          					echo "<p><tr><td> RG: ". $linha[0] . "</td><td> Nome: " . $linha[1] . "</td><td> Sobrenome: " . $linha[2] . " </td><td> Empresa: " . $linha[3] .   "</td></tr></p>";
       					 
						 


						}
						
					mysqli_free_result($resultado2);
					mysqli_close($strcon);					 
						
					
					echo "<br>";
					echo "<input type='submit' name='submit' value='Fechar' onClick='window.close();'>";

?>

    </fieldset>
			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>    
    </div>

</div>
</body>
</html>