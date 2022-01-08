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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form")) {
  $updateSQL = sprintf("UPDATE arquivo SET id_cliente=%s, nome=%s, foto=%s, texto=%s, arquivo=%s, arquivo2=%s, produto=%s, midia=%s, diretor=%s, criacao=%s, planejamento=%s, midia2=%s, produtora=%s, locucao=%s, `data`=%s WHERE id=%s",
                       GetSQLValueString($_POST['cliente'], "int"),
                       GetSQLValueString($_POST['nome'], "text"),
                       GetSQLValueString($_POST['foto'], "text"),
                       GetSQLValueString($_POST['editor'], "text"),
                       GetSQLValueString($_POST['arquivo'], "text"),
                       GetSQLValueString($_POST['arquivo2'], "text"),
                       GetSQLValueString($_POST['produto'], "text"),
                       GetSQLValueString($_POST['midia'], "text"),
                       GetSQLValueString($_POST['diretor'], "text"),
                       GetSQLValueString($_POST['criacao'], "text"),
                       GetSQLValueString($_POST['planejamento'], "text"),
                       GetSQLValueString($_POST['midia2'], "text"),
                       GetSQLValueString($_POST['produtora'], "text"),
                       GetSQLValueString($_POST['locucao'], "text"),
                       GetSQLValueString($_POST['data'], "date"),
                       GetSQLValueString($_POST['vid'], "int"));

  mysql_select_db($database_conexao, $conexao);
  $Result1 = mysql_query($updateSQL, $conexao) or die(mysql_error());

  $updateGoTo = "ok.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_conexao, $conexao);
$query_clientes = "SELECT id, nome FROM cliente ORDER BY nome ASC";
$clientes = mysql_query($query_clientes, $conexao) or die(mysql_error());
$row_clientes = mysql_fetch_assoc($clientes);
$totalRows_clientes = mysql_num_rows($clientes);

$colname_editarquivo = "-1";
if (isset($_GET['id'])) {
  $colname_editarquivo = (get_magic_quotes_gpc()) ? $_GET['id'] : addslashes($_GET['id']);
}
mysql_select_db($database_conexao, $conexao);
$query_editarquivo = sprintf("SELECT * FROM arquivo WHERE id = %s", $colname_editarquivo);
$editarquivo = mysql_query($query_editarquivo, $conexao) or die(mysql_error());
$row_editarquivo = mysql_fetch_assoc($editarquivo);
$totalRows_editarquivo = mysql_num_rows($editarquivo);
?>

<?php require_once('topo.php'); ?>
<!-- Load jQuery -->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load("jquery", "1.3");
</script>

<!-- Load TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/jquery.tinymce.js"></script>

<script type="text/javascript" src="editor.js"></script>
	    <div id="content" >
	       <?php require_once('menu.php'); ?>
		<div id="content_main" class="clearfix">
		  <!-- end #sidebar -->

		<!-- end #content_main -->
		<!-- end #postedit -->
		<!-- end #tabledata -->
<div class="section">
			
		<div>
		  <h2 class="ico_mug">Arquivo</h2>
		</div>
		<form action="<?php echo $editFormAction; ?>" method="POST" name="form" id="form" accept-charset="iso-8859-1">
			<fieldset>
				<legend><span>Adicionar registro </span>  
				  <br />
		    </legend>
			<?php if ($_GET["var"] >"0"){ ?>
			<div id="success" class="info_div"><span class="ico_success">Registro Adicionado com Sucesso</span></div><br />
			<?php }?>
				  <table width="400" border="0" cellpadding="2" cellspacing="3" class="texto_formulario">
                    <tr >
                      <td colspan="2" ><input name="vid" type="hidden" id="vid" value="<?php echo $row_editarquivo['id']; ?>" /></td>
                    </tr>
                    <tr >
                      <td colspan="2" >Nome</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="nome" type="text" class="form2" id="nome" value="<?php echo $row_editarquivo['nome']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2">Fotos</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="foto" type="text" class="form2" id="foto" value="<?php echo $row_editarquivo['foto']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><a href="#" onclick="window.open('galeria.php', '', 'toolbar=0,location=0,status=0,menubar=0,scrollbars=yes,resizable=0,width=658,height=500')">Inserir Foto </a></td>
                    </tr>
                    <tr>
                      <td colspan="2">Clientes</td>
                    </tr>
                    <tr>
                      <td colspan="2"><select name="cliente" class="form2" id="cliente">
                        <option selected="selected" value="" <?php if (!(strcmp("", $row_editarquivo['id_cliente']))) {echo "selected=\"selected\"";} ?>> --- </option>
                        <?php
do {  
?>
                        <option value="<?php echo $row_clientes['id']?>"<?php if (!(strcmp($row_clientes['id'], $row_editarquivo['id_cliente']))) {echo "selected=\"selected\"";} ?>><?php echo $row_clientes['nome']?></option>
                        <?php
} while ($row_clientes = mysql_fetch_assoc($clientes));
  $rows = mysql_num_rows($clientes);
  if($rows > 0) {
      mysql_data_seek($clientes, 0);
	  $row_clientes = mysql_fetch_assoc($clientes);
  }
?>
                      </select></td>
                    </tr>
                    <tr>
                      <td width="246">Arquivo</td>
                      <td width="137" class="ico_success"><a href="#" onclick="window.open('arquivo_todos.php', '', 'toolbar=0,location=0,status=0,menubar=0,scrollbars=yes,resizable=0,width=658,height=500')">Inserir Arquivo</a></td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="arquivo" type="text" class="form2" id="arquivo" value="<?php echo $row_editarquivo['arquivo']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">Arquivo2</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="arquivo2" type="text" class="form2" id="arquivo2" value="<?php echo $row_editarquivo['arquivo2']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="odd">Informa&ccedil;&otilde;es da Midia </td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2">Produto</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="produto" type="text" class="form2" id="produto" value="<?php echo $row_editarquivo['produto']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">M&iacute;dia/Especifica&ccedil;&atilde;o</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="midia" type="text" class="form2" id="midia" value="<?php echo $row_editarquivo['midia']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">Diretor de Cria&ccedil;&atilde;o</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="diretor" type="text" class="form2" id="diretor" value="<?php echo $row_editarquivo['diretor']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">Cria&ccedil;&atilde;o:</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="criacao" type="text" class="form2" id="criacao" value="<?php echo $row_editarquivo['criacao']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">Planejamento:</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="planejamento" type="text" class="form2" id="planejamento" value="<?php echo $row_editarquivo['planejamento']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">M&iacute;dia:</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="midia2" type="text" class="form2" id="midia2" value="<?php echo $row_editarquivo['midia2']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">Produtora:</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="produtora" type="text" class="form2" id="produtora" value="<?php echo $row_editarquivo['produtora']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">Locu&ccedil;&atilde;o:</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="locucao" type="text" class="form2" id="locucao" value="<?php echo $row_editarquivo['locucao']; ?>" size="50" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">Descri&ccedil;&atilde;o</td>
                    </tr>
                    <tr>
                      <td colspan="2">
					  <textarea id="nourlconvert"  name="editor" rows="15" cols="80" style="width: 80%; height:450px" class="tinymce"><?php echo $row_editarquivo['texto']; ?></textarea>					  </td>
                    </tr>
                    <tr>
                      <td colspan="2"><input name="data" type="hidden" id="data" value="<?php echo $vdata=date("y/m/d")." ".date("h:i:s"); ?>" /></td>
                    </tr>
                  </table>
			  <br /> 
			      <input type="submit" value="Gravar" />
			  <br />
		  </fieldset>
			
		    
		    <input type="hidden" name="MM_update" value="form">
		</form>
		  </div>
<!-- end #section -->
		
		<div id="panels" class="clearfix">
		  <!-- end #photo --><!-- end #todo -->
          <!-- end #calendar -->
</div>
		<!-- end #panels -->
		<!-- end #dialog [if you don't want this, delete whole div and 6th line i custom.js -->
        </div>
	    <!-- end #content -->
	    <!-- end #footer -->
</div>
<!-- end container -->
</div>
</body>
</html>
<?php
mysql_free_result($clientes);

mysql_free_result($editarquivo);
?>
