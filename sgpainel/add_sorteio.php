<?php require_once('Connections/conexao.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE promocao SET ativo=%s WHERE id=%s",
                       GetSQLValueString($_POST['ativo'], "int"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_conexao, $conexao);
  $Result1 = mysql_query($updateSQL, $conexao) or die(mysql_error());

  $updateGoTo = "sorteio.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
 
$op=$_POST["opcao"];
$sorteio=$_POST["promocao"];

if($op=="0") {
$sql="id_promocao ='$sorteio'";
}else{
$sql="id_opcao = '$op' and id_promocao ='$sorteio'" ;
}
?>
<?php
mysql_select_db($database_conexao, $conexao);
$query_sorteio_ativo = "select promocao.id, cliente.nome,cliente.email from promocao  inner join cliente on (cliente.id = promocao.id_cliente) where $sql and (ativo <> '1' or ativo is null) ORDER BY RAND()  limit 1";
$sorteio_ativo = mysql_query($query_sorteio_ativo, $conexao) or die(mysql_error());
$row_sorteio_ativo = mysql_fetch_assoc($sorteio_ativo);
$totalRows_sorteio_ativo = mysql_num_rows($sorteio_ativo);
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
    <td><form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
      <table width="100%" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td class="texto"><?php echo $row_sorteio_ativo['nome']; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="texto"><?php echo $row_sorteio_ativo['email']; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="87%" class="texto"><a href="sorteio.php">&lt;&lt;&lt; Voltar</a>
            <input name="id" type="hidden" id="id" value="<?php echo $row_sorteio_ativo['id']; ?>" />
            <input type="submit" name="Submit" value="Gravar" />
            <input name="ativo" type="hidden" id="ativo" value="1" /></td>
          <td width="13%">&nbsp;</td>
        </tr>
      </table>
        <input type="hidden" name="MM_update" value="form1">
    </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($sorteio_ativo);
?>
