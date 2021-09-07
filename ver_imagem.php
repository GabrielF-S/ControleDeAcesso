	






<?php

	$strcon =mysqli_connect('localhost:3307','root','usbw','mydb') or die(' Erro ao conectar com o Banco de Dados');
	$id_imagem = $_POST['imagem'];
	$querySelecionaPorCodigo = "SELECT nome, foto FROM cadastro WHERE codigo = $id_imagem";
	$resultado = mysql_query($querySelecionaPorCodigo);
	$imagem = mysql_fetch_object($resultado);
	header("Content-type: ".$tipo."");
 	echo $imagem->imagem;      

?>