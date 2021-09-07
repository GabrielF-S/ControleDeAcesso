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
             <br>
        		<img src="IMG/Logo.png"/>
                <br>
                <br>
<?php

$nome	=($_POST['nome']);

$sobrenome	=($_POST['lastname']);
$documento	=($_POST['rg']);
$empresa	=($_POST['empresa']);
	/*$motivo	=	$_POST['motivo'];
	$data	=	$_POST['dia'];
	$hora	=	$_POST['hora'];*/

$imagem	= $_FILES['foto']['tmp_name'];
$imgSize	=$_FILES['foto']['size'];
$imgError	=$_FILES['foto']['error'];
$imgType	=$_FILES['foto']['type'];
$imgNome	=$_FILES['foto']['name'];


if ($imagem	!="none"){
	$fp	= fopen($imagem,"rb");
	$conteudo	=fread($fp,$imgSize);
	$conteudo	=addslashes($conteudo);
	fclose($fp);
	}


	$strcon =mysqli_connect('localhost:3307','root','usbw','mydb') or die(' Erro ao conectar com o Banco de Dados');
	$sql = "INSERT INTO cadastros (Nome, Sobrenome, RG, Empresa, Foto)
					VALUES('$nome', '$sobrenome', '$documento', '$empresa', '$conteudo')";

	/*	$sql = "INSERT INTO visitas (Cadastros_RG, entradaDia, entradaHora, motivo) VALUES ('$rg','$data', '$hora','$motivo')";
	*/
	
 	$resultado = mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro <br><br><br> <input type='submit' name='submit' value='Fechar' onClick='window.close();'>");
	/*$tipo= mysql_result($resultado,$imgType);
	$conteudo= mysql_result($resultado);
	header("Con	print $conteudo;
tent-type:$tipo");


        mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro"); */
    mysqli_close($strcon);
	header("Refresh: 1;url=Relatorio de cadastro.php");

?>


</fieldset>
			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
</div>
</body>
</html>