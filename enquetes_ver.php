<?php require_once('inc/inc_pizza.php'); ?>
<?php require_once('registro.php'); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pizza Gulla - Coma sem pecado!</title>
<link rel="shortcut icon" href="fatias/favicon.ico">
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
</head>

<body class="fd">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><table width="962" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="962" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="top"><img src="fatias/pg_img_top_fd_br.png" width="962" height="11"></td>
          </tr>
          <tr>
            <td align="center" valign="top" class="fd_alpha"><table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="305" valign="top"><table width="940" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><?php include('top.php'); ?></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#f5eee0"><table width="940" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="690" align="left" valign="top"><table width="690" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="15">&nbsp;</td>
                        <td width="675" align="center" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="141" valign="top" class="fd_tit"><table width="650" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="330" align="left" valign="middle"><table width="288" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="left"><img src="fatias/tit_enquetes.png" width="212" height="29"></td>
                                  </tr>
                                </table></td>
                                <td width="320" height="120">&nbsp;</td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td valign="top" class="ft_pt_18">?rea de acesso ao sistema de enquetes Pizza Gulla</td>
                          </tr>
						  <?php 				
		  
 /// introdu??o
            
			  $query=ENQUETEATIVA();

	         $row_arq= mysql_fetch_assoc($query);

             $totalRows_arq = mysql_num_rows($query);	  



						
			  ?>
						  
						<?php if($totalRows_arq > "0") {?>  
                          <tr>
                            <td align="left" valign="top" class="ft_pt_13"><?php echo $row_arq["titulo"]; ?></td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="65" valign="top"><form name="form2" method="post" action="enquetes_resultado.php">
                              <table width="650" border="0" cellspacing="0" cellpadding="0">
							  <?php do { 
							  $titulo=$row_arq["titulo"];
							  $idpromoca=$row_arq["id"];
							  
							  ?>
							  
                                <tr>
                                  <td align="left"><input name="cat" type="radio" value="<?php echo $row_arq["cat"]; ?>"></td>
                                  <td class="ft_pt_13"><?php echo $row_arq["opcao"]; ?></td>
                                </tr>
								<?php 
						
						 } while ($row_arq= mysql_fetch_assoc($query));?> 	
								
                                <tr>
                                  <td align="left" valign="top">&nbsp;</td>
                                  <td valign="top">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="30" align="left" valign="top">&nbsp;</td>
                                  <td width="620" valign="top"><input type="submit" name="Submit" value="Votar">
                                    <input name="promocao" type="hidden" id="promocao" value="<?php echo $titulo; ?>">
                                    <input name="idpromocao" type="hidden" id="idpromocao" value="<?php echo $idpromoca; ?>"></td>
                                </tr>
								<?php }?>
								
                              </table>
                                                        </form>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="21" valign="top">&nbsp;</td>
                          </tr>
                          </table></td>
                      </tr>
                    </table></td>
                    <td width="250" align="left" valign="top"><table width="230" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><?php include('lat.php'); ?></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><img src="fatias/pg_img_rod_corpo.png" width="940" height="18"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" valign="top"><img src="fatias/pg_img_rod_fd_br.png" width="962" height="11"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="940" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><?php include('rod.php'); ?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>