<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Galeria de Imagens</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<style type="text/css">
        #custom-demo .uploadifyQueueItem {
  background-color: #FFFFFF;
  border: none;
  border-bottom: 1px solid #E5E5E5;
  font: 11px Verdana, Geneva, sans-serif;
  height: 50px;
  margin-top: 0;
  padding: 10px;
  width: 350px;
}
#custom-demo .uploadifyError {
  background-color: #FDE5DD !important;
  border: none !important;
  border-bottom: 1px solid #FBCBBC !important;
}
#custom-demo .uploadifyQueueItem .cancel {
  float: right;
}
#custom-demo .uploadifyQueue .completed {
  color: #C5C5C5;
}
#custom-demo .uploadifyProgress {
  background-color: #E5E5E5;
  margin-top: 10px;
  width: 100%;
}
#custom-demo .uploadifyProgressBar {
  background-color: #0099FF;
  height: 3px;
  width: 1px;
}
#custom-demo #custom-queue {
  border: 1px solid #E5E5E5;
  height: 213px;
margin-bottom: 10px;
  width: 370px;
}				</style>

<link href="swf/uploadify.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="swf/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="swf/swfobject.js"></script>
    <script type="text/javascript" src="swf/jquery.uploadify.v2.1.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#file_upload').uploadify({
        'uploader'  : 'swf/uploadify.swf',
        'script'    : 'swf/uploadify.php',
        'cancelImg' : 'swf/cancel.png',
        'folder'    : 'arquivo',
		'multi'     : true,
        'auto'      : true,
		'fileExt'        : '*.jpg;*.gif;*.TXT;*.PDF;*.flv;*.mp4;*.mp3',
  'fileDesc'       : 'Image Files (.JPG, .GIF, .TXT,.PDF,.FLV,.MP4,.MP3)',
  'queueID'        : 'custom-queue',
  'queueSizeLimit' : 3,
  'simUploadLimit' : 3,
  'removeCompleted': false,
  
 'onSelectOnce'   : function(event,data) {
      $('#status-message').text(data.filesSelected + ' files have been added to the queue.');
    },
  'onAllComplete'  : function(event,data) {
      $('#status-message').text(data.filesUploaded + ' Arquivos enviados, ' + data.errors + ' errors de Envio.');
    }
});				});
				</script>


<link href="../include/estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style23 {
	font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;
}
.style28 {color: #000000}
.textform {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	background-color: #FFFFFF;
	border: 1px solid #CCCCCC;
	height: 30px;
	width: 600px;
}
-->
</style>

<link href="estilo/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="627" border="0" cellspacing="3" class="borda">
  <tr>
    <td width="621" height="109" bgcolor="#224676" class="menu">ARQUIVOS DONWLOADS </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
	
	<form action="#" method="post" enctype="application/x-www-form-urlencoded" name="form" id="form">
    <input id="file_upload" name="file_upload" type="file"  width="120" height="30"/>

		
        <div id="status-message" class="texto">Enviar Arquivo</div>

<div class="uploadifyQueue" id="custom-queue">
</div>

       </div>
      </div>
      </div>
</div>
	</form>	
	
	</td>
  </tr>
  <tr>
    <td align="center" class="texto"><a href="arquivo_todos.php">Click aqui para visualizar Pasta</a> </td>
  </tr>
  <tr>
    <td><form id="form2" name="form2" method="post" action="">
      <table width="321" border="0">
        <tr>
          <?
//definimos o path de acesso
$d=$_SERVER['DOCUMENT_ROOT'];
$path = "$d/sgpainel/arquivo/";
$pagina=$_SERVER['SERVER_NAME'];
$HTTP="http://".$pagina."/sgpainel/fotos/";
//echo $path;

if (!empty($_GET[del])) {
	unlink("arquivo/".$_GET[del]);
	//unlink("nome_do_arquivo");

}

//abrimos o direct&oacute;rio
$dir = opendir($path);
//Mostramos as informa&ccedil;&otilde;es
$q="0";
while ($elemento = readdir($dir))
{
  if (($elemento != ".") && ($elemento !=".."))   {
  list($width, $height, $type, $attr) = getimagesize("arquivo/$elemento");
?>
          <td width="10">&nbsp;</td>
          <td width="301"><table width="287" border="0" bgcolor="#f4f4f4" class="borda_escura">
              <tr class="texto">
                <td align="center"><?php 
				
				echo $elemento; ?></td>
                <td align="center">&nbsp;</td>
              </tr>
              <tr class="texto">
                <td width="150" align="left">
				  <textarea name="link" cols="50" class="textform" id="link"><?php echo $HTTP; ?><?php echo $elemento; ?></textarea>
                  </a></td>
                <td width="20" align="center"><a href="?del=<?php echo $elemento; ?>"><img src="img/cancel.png" width="16" height="16" border="0" /></a></td>
              </tr>
          </table></td>
          <?php 
		  }
		$q=$q+1;  
		//echo $q; 
		if($q == "1"){
        echo "</tr>" ;
		$q=0;
        }
}
//Fechamos o direct&oacute;rio
closedir($dir);?>
        </tr>
      </table>
        </form>    </td>
  </tr>
</table>
</body>
</html>
