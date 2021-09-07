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
        <p><h2><i>Cadastrar!</i></h2></p>
    <form action="Recebe Dados.php" method="post" enctype="multipart/form-data" name="cadastro" target="_blank"> 

    <table align="center" cellpadding="2">
    <tr>
    <td></td>
    <td><label for="nome"> Nome: </label> </td>
    <td align="left"><input type="text" name="nome" required placeholder="" autocomplete="off"/></td>
    </tr>
    <tr>
    <td></td>
    <td><label for="sobrenome"> Sobrenome: </label> </td>
    <td align="left"><input type="text" name="lastname" required placeholder="" autocomplete="off"  /></td>
    </tr>    
    <tr>
    <td></td>
    <td><label for="documento"> RG: </label></td>
    <td align="left"><input type="text" name="rg" required placeholder="Sem pontos e traço" autocomplete="off" maxlength="9"></td>
    </tr>
    <tr>
    <td width="100px"></td>
    <td><label for="empresa"> Empresa: </label></td>
    <td align="left"><input type="text" name="empresa" required autocomplete="off" placeholder=""></td>
    </tr>
    <tr>
    <td></td>
    <td><label for="foto"> Foto: </label> </td>
    <td align="left"><input type="file" name="foto" required placeholder="" /></td>
    </tr>
        <!--<tr>
         <td></td>
                        	<td><label for="entrada">Entrada: </label></td>
                        	<td align="left"><input type="date" name="dia"  required> <input type="time" name="hora" required></td>
                        </tr>
                        
                        <tr>
                        <td></td>
                        	<td><label for="motivo">Motivo: </label></td>
                            <td align="left"><input type="text" name="motivo" required class="areadetexto" /> </td>
                        </tr> -->
    <tr>
    <td></td>
    <td><label for="envio">  </label> </td>
    <td align="left"><input type="submit"  value="Cadastrar"/></td>
    </tr>
    <tr>
    <td></td>
    <td><label for="hidden"></label> </td>
    <td align="left"> <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/></td>
    </tr>
    </table>
    </form>
    
    </fieldset>
    			<p><h6><i>Desenvolvido por:</i></h6></p>
            <p><h6><i>Gabriel Ferreira dos Santos &copy;</i></h6></p>
    </div>
			
</body>
</html>