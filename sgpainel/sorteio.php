<?php require_once('Connections/conexao.php'); ?>
<?php
mysql_select_db($database_conexao, $conexao);
$query_sorteio = "SELECT * FROM opcao where id_quest = '$_COOKIE[venqid]' ";
$sorteio = mysql_query($query_sorteio, $conexao) or die(mysql_error());
$row_sorteio = mysql_fetch_assoc($sorteio);
$totalRows_sorteio = mysql_num_rows($sorteio);

mysql_select_db($database_conexao, $conexao);
$query_ossortiados = "select promocao.id, cliente.nome,cliente.email from promocao  inner join cliente on (cliente.id = promocao.id_cliente) where ativo = '1' and id_promocao = '$_COOKIE[venqid]' ";
$ossortiados = mysql_query($query_ossortiados, $conexao) or die(mysql_error());
$row_ossortiados = mysql_fetch_assoc($ossortiados);
$totalRows_ossortiados = mysql_num_rows($ossortiados);
?>
<?php require_once('inc/inc_admin.php'); ?>
<?php require_once('registro.php'); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #ededed;
}
-->
</style>
<link href="estilo/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="500" border="0" bgcolor="#ededed">
  <tr>
    <td height="100" valign="top"><form id="form1" name="form1" method="post" action="add_sorteio.php">
      <table width="500" border="0">
        <tr>
          <td class="texto_formulario">Sorteio</td>
        </tr>
        <tr>
          <td><select name="opcao" id="opcao">
		  <option value="0" selected="selected"> Todos </option>
            <?php
do {  
?>
            <option value="<?php echo $row_sorteio['id']?>"><?php echo $row_sorteio['opcao']?></option>
            <?php
} while ($row_sorteio = mysql_fetch_assoc($sorteio));
  $rows = mysql_num_rows($sorteio);
  if($rows > 0) {
      mysql_data_seek($sorteio, 0);
	  $row_sorteio = mysql_fetch_assoc($sorteio);
  }
?>
          </select>
          </td>
        </tr>
        <tr>
          <td><input name="promocao" type="hidden" id="promocao" value="<?php echo $row_sorteio['id_quest']; ?>" />
            <input name="Submit" type="submit" class="botao" value="Sorteio" /> </td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
  <tr>
    <td><?php if ($totalRows_ossortiados > 0) { // Show if recordset not empty ?>
        <table width="100%" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td class="texto"><?php echo $row_ossortiados['nome']; ?></td>
          <td>&nbsp;</td>
        </tr>
          <tr>
            <td width="87%" class="texto"><?php echo $row_ossortiados['email']; ?></td>
          <td width="13%"><a href="sorteio_res.php?id=<?php echo $row_ossortiados['id']; ?>"><img src="images/excluir.gif" width="20" height="20" border="0" /></a></td>
        </tr>
              </table>
        <?php } // Show if recordset not empty ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($sorteio);

mysql_free_result($ossortiados);
?>
