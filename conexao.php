

<?php
$strcon =mysqli_connect('localhost:3307','root','usbw','mydb') or die(' Erro ao conectar com o Banco de Dados');
$result = mysqli_query($strcon, $sql);

function executarBanco($sql){
      mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
   } 


?>