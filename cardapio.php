<?php require_once('inc/inc_pizza.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cardapio |Pizza Gulla - Coma sem pecado!</title>
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
                            <td valign="top" class="ft_pt_18"><table width="650" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="330"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                                  <tr>
								   <?php 				
		  
 /// introdução
            
			  $query=CATEGORIA();

	         $row_arq= mysql_fetch_assoc($query);

             $totalRows_arq = mysql_num_rows($query);	  


$g=1;
						do {
			  ?>
								  
                                    <td><table width="320" border="0" cellspacing="2" cellpadding="2">
                                      <tr>
                                        <td><a id="txt" href="cardapio01.php?id=<?php echo $row_arq["id"]; ?>" target="_parent" title="<?php echo $row_arq["tipo"]; ?>">
										<img src="<?php echo $row_arq["foto"]; ?>" width="320" height="100" border="0" class="bd_ft"></a></td>
                                      </tr>
                                    </table></td>
									
							<?php 
			  if($g == "2"){
        echo "</tr>" ;
		$g=0;
        }?>
			  
						
							<?php 
						 $g=$g+1;
						 } while ($row_arq= mysql_fetch_assoc($query));?> 		
                                  </tr>
                                </table></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td valign="top" id="esp">&nbsp;</td>
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