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
<link href="estilos.css" rel="stylesheet" type="text/css" />

<?php 
$area='4';
$query3=TECEARIO($area) ;

	         $row_terc= mysql_fetch_assoc($query3);

             $totalRows_terc = mysql_num_rows($query3);

?>
<table width="230" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="173" align="center" background="<?php echo $row_terc["foto"]; ?>" style="background-repeat:no-repeat;"><table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><?php echo $row_terc["titulo"]; ?></td>
      </tr>
      <tr>
        <td id="esp">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><form id="form1" name="form1" method="post" action="">
          <a id="vt" href="enquetes.php" target="_parent" title="Clique aqui para votar"></a>
        </form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="fatias/pg_img_listra_hor.png" width="230" height="27" /></td>
  </tr>
  <?php 
$area='3';
$query3=TECEARIO($area) ;

	         $row_terc= mysql_fetch_assoc($query3);

             $totalRows_terc = mysql_num_rows($query3);

?>
  
  <tr>
    <td><a href="<?php echo $row_terc["id"]; ?>"><img src="<?php echo $row_terc["foto"]; ?>" width="230" height="463" border="0" class="bd_ft" /></a></td>
  </tr>
</table>
