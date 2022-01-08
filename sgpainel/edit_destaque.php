<?php require_once('Connections/conexao.php'); ?>
<?php

mysql_select_db($database_conexao, $conexao);


$query = "SELECT * FROM destaque where id = '$_GET[id]' ORDER BY id DESC ";
$noticia_dest = mysql_query($query, $conexao) or die(mysql_error());
$row_noticia_dest = mysql_fetch_assoc($noticia_dest);
$totalRows_noticia_dest = mysql_num_rows($noticia_dest);



$query_noticia = "SELECT id, titulo FROM news where id_area='1' ORDER BY id DESC limit 10";
$noticia = mysql_query($query_noticia, $conexao) or die(mysql_error());
$row_noticia = mysql_fetch_assoc($noticia);
$totalRows_noticia = mysql_num_rows($noticia);



?>
<?php require_once('topo.php'); ?>

	    <div id="content" >
	       <?php require_once('menu.php'); ?>
		<div id="content_main" class="clearfix">
		  <!-- end #sidebar -->

		<!-- end #content_main -->
		<!-- end #postedit -->
		<!-- end #tabledata -->
<div class="section">
			
		<div>
		  <h2 class="ico_mug">Noticias</h2>
		</div>
		<form action="edit_destaque_res.php" method="POST" name="weboptions" id="weboptions" accept-charset="iso-8859-1">
			<fieldset>
				<legend><span>Adicionar registro </span>  
				  <br />
		    </legend>
			<?php if ($_GET["var"] >"0"){ ?>
			<div id="success" class="info_div"><span class="ico_success">Registro Adicionado com Sucesso</span></div><br />
			<?php }?>
			<table width="469" border="0" cellpadding="2" cellspacing="3" class="texto_formulario">
              <tr >
                <td colspan="2" align="center" class="ui-widget-shadow" ><a href="#" onclick="window.open('galeria.php', '', 'toolbar=0,location=0,status=0,menubar=0,scrollbars=yes,resizable=0,width=658,height=500')">Inserir Foto </a></td>
                <td width="63" align="right" >&nbsp;</td>
                <td width="191" align="center" class="ui-widget-shadow" ><a href="ok2.php">Atualizar Home </a></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4">Titulo</td>
              </tr>
              <tr>
                <td colspan="4"><input name="titulo" type="text" class="form2" id="titulo" value="<?php echo $row_noticia_dest['titulo']; ?>" size="50" /></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td width="113" bgcolor="#eaeaea">Links </td>
                <td colspan="3" bgcolor="#eaeaea">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4" bgcolor="#eaeaea"><input name="link" type="text" class="form2" id="link" value="<?php echo $row_noticia_dest['link']; ?>" size="50" /></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4">Foto</td>
              </tr>
              <tr>
                <td colspan="4"><input name="foto" type="text" class="form2" id="foto" value="<?php echo $row_noticia_dest['foto']; ?>" size="50" /></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4">Resumo</td>
              </tr>
              <tr>
                <td colspan="4"><textarea name="resumo" cols="50" class="form2" id="resumo"><?php echo $row_noticia_dest['resumo']; ?></textarea></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4">Areas</td>
              </tr>
              <tr>
                <td colspan="4"><input <?php if (!(strcmp($row_noticia_dest['tipo'],"1"))) {echo "checked=\"checked\"";} ?> name="dest" type="radio" value="1" />
                  Imagem Grande (650 x 217px)</td>
              </tr>
              <tr>
                <td colspan="4"><input <?php if (!(strcmp($row_noticia_dest['tipo'],"2"))) {echo "checked=\"checked\"";} ?> name="dest" type="radio" value="2" />
                Texto Central (Sem foto)</td>
              </tr>
              <tr>
                <td colspan="4"><input <?php if (!(strcmp($row_noticia_dest['tipo'],"3"))) {echo "checked=\"checked\"";} ?> name="dest" type="radio" value="3" />
                Foto Lateral (148 x 298px)</td>
              </tr>
              <tr>
                <td colspan="4"></td>
              </tr>
              <tr>
                <td colspan="4"><input <?php if (!(strcmp($row_noticia_dest['tipo'],"4"))) {echo "checked=\"checked\"";} ?> name="dest" type="radio" value="4" /> 
                  Chamada Enquete
</td>
              </tr>
              <tr>
                <td colspan="4"><input name="id" type="hidden" id="id" value="<?php echo $row_noticia_dest['id']; ?>" /></td>
              </tr>
            </table>
			<br /> 
			      <input type="submit" value="Gravar" /><br />
			     
		  </fieldset>
			
		    
		    
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
