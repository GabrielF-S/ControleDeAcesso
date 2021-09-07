<!DOCTYPE html>
<html>
	<head>
		<link href="CSS.css" rel = "stylesheet" style = "text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Controle de Fluxo</title>
	</head>

	<body>
    <?php
	
   $dia	=	$_POST['dia'];
   $hora	=	$_POST['hora'];
	
	$id	=	$_POST['ID'];	
	$strcon = mysqli_connect('localhost:3307','root','usbw','mydb')  or die(' Erro ao conectar com o Banco de Dados');
	/*$str = "SELECT idVisita FROM visitas WHERE saida IS  NULL ORDER BY idVisita ASC LIMIT 1";
	$resultado1 = mysqli_query($strcon, $str);
	while($linha = mysqli_fetch_row($resultado1) )
        				{
							
          					$visita=$linha[0];
							*/
	
	$strcon = mysqli_connect('localhost:3307','root','usbw','mydb')  or die(' Erro ao conectar com o Banco de Dados');
	$sql = "UPDATE visitas SET saidaDia ='$dia', saidaHora='$hora' WHERE idVIsita ='$id'  ";
	$resultado = mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar visita");
	mysqli_close($strcon);
						//}
	
	
	header("Refresh: 1;url=Ratorio_saida2.php");
    		
            
    ?>	
	</body>
</html>