<?php require_once('inc/inc_pizza.php'); ?>
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
                    <td width="690" align="left" valign="top"><table width="677" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="15">&nbsp;</td>
                        <td width="662" valign="top"><table width="662" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="224" valign="top" class="fd_pn"><table width="655" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="5">&nbsp;</td>
                                <td width="650" height="217" align="left" valign="top"><iframe src="pn.php" name="pn" width="650" marginwidth="0" height="217" marginheight="0" align="top" scrolling="No" frameborder="0" id="pn" title="pn"></iframe></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td id="esp">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><table width="662" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="357" align="right" valign="top" class="fd_sbv"><table width="340" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="ft_pt_13">&nbsp;</td>
                                  </tr>
								  <?php 
$query=SUBHOME() ;

	         $row_sub= mysql_fetch_assoc($query);

             $totalRows_sub = mysql_num_rows($query);

?>
								  
								  
                                  <tr>
                                    <td class="ft_pt_13"><a id="txt" href="<?php echo $row_sub["link"]; ?>" target="_parent"><?php echo $row_sub["resumo"]; ?></a></td>
                                  </tr>
                                </table></td>
                                <td width="305"><img src="fatias/pg_img_fd_sbv_compl.png" width="305" height="199"></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td id="esp">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top"><table width="662" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="366" height="213" align="center" valign="top" class="fd_card"><table width="310" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="ft_pt_13">Conhe&ccedil;a todas as variedades<br>de pizzas de nosso card&aacute;pio.</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="right"><a id="cd" href="cardapio.php" target="_parent" title="Acesse nosso cardápio"></a></td>
                                  </tr>
                                </table></td>
                                <td width="296" valign="top" class="fd_email"><table width="280" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="ft_pt_13">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="ft_pt_13">Receba novidades<br>e promo&ccedil;&otilde;es da Pizza Gulla.</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><form name="form2" method="post" action="newsletter.php">
                                      <table width="280" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="218" height="39" align="center" class="fd_cx"><table width="200" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td><input name="email" type="text" class="cx_form" id="email" value="Seu e-mail aqui." size="30"></td>
                                            </tr>
                                          </table></td>
                                          <td align="right"><label>
                                            <input type="image" name="imageField" id="imageField" src="fatias/pg_bt_email.png" title="Cadastrar e-mail">
                                          </label></td>
                                        </tr>
                                      </table>
                                    </form></td>
                                  </tr>
                                  </table></td>
                              </tr>
                            </table></td>
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