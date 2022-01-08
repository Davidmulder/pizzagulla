<?php require_once('inc/inc_pizza.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php 				// quem somos		  

              $cat=anti_injection($_GET["id"]);
			  if($cat=="") {
			  $cat=1;
			  }else{
			  $cat=anti_injection($_GET["id"]);
			  }
			  $query=PRODUTO($cat);

	         $row_empred= mysql_fetch_assoc($query);

             $totalRows_empred = mysql_num_rows($query);	  



			  ?>

<title><?php echo $row_empred["tipo"]; ?> | Pizza Gulla - Coma sem pecado!</title>
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
                                    <td align="left"><img src="fatias/pg_img_tit_cardapio.png" width="203" height="34"></td>
                                  </tr>
                                </table></td>
                                <td width="320" height="120">&nbsp;</td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top" class="ft_pt_13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top" class="ft_pt_18">1 - <?php echo $row_empred["tipo"]; ?></td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top" class="ft_pt_18"><table width="640" border="0" align="center" cellpadding="0" cellspacing="2">
                              <tr>
                                <td width="564" align="left" class="ft_pt_11"><strong>SABOR</strong></td>
                                <td width="80" align="center" valign="top"><strong class="ft_pt_11">INTEIRA</strong></td>
                                </tr>
                              </table></td>
                          </tr>
						  
						 <?php if ($totalRows_empred > "0") { ?>
						  <?php 
						  $q=1;
						  $v=1;
						  do {
						  
						  if($q=="2"){
						  $x="bd_card";
						  $q=0;
						  }else{
						  $x="";
						  }
						  
						  ?>
                          <tr>
                            <td height="40" align="center" valign="middle" class="<?php echo $x; ?>"><table width="640" border="0" align="center" cellpadding="0" cellspacing="2">
                              <tr>
                                <td width="564" align="left"><strong><span class="ft_pt_13"><?php echo $v; ?> - <?php echo $row_empred["titulo"]; ?></span></strong><br>
                                  <span class="ft_pt_11"><?php echo $row_empred["texto"]; ?></span></td>
                                <td width="80" align="center" valign="middle"><strong><span class="ft_pt_13">R$ <?php echo GETVALOR($row_empred["valor"]); ?></span></strong></td>
                              </tr>
                            </table></td>
                          </tr>
						  
						  <?php 
						  $q=$q+1;
						  $v=$v+1;
						  } while ($row_empred = mysql_fetch_assoc($query)); ?>
						  <?php }?>
                          <tr>
                            <td valign="top" class="ft_pt_18">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top"><a href="javascript:history.go(-1)" target="_self" class="ft_vm_11" id="txt">&lt;&lt; Voltar</a></td>
                          </tr>
                          <tr>
                            <td valign="top" class="ft_pt_18">&nbsp;</td>
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