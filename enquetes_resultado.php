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
                            <td valign="top" class="ft_pt_18">�rea de acesso ao sistema de enquetes Pizza Gulla</td>
                          </tr>
						  <?php 				
		  
 /// resultado
  $codigo = anti_injection($_POST["cat"]);
   $cliente = $_COOKIE["vcliente"];
    $promocao = anti_injection($_POST["promocao"]);
	 $id_promocao = anti_injection($_POST["idpromocao"]);
	 
	 // verse o cliente ja votou
	 
	  $query=LISTPROMO($cliente,$id_promocao);
			  $row_lista= mysql_fetch_assoc($query);

             $totalRows_lista = mysql_num_rows($query);
			 
			 if($totalRows_lista > "0") {
			 
			 $mensagem= "Voc� n�o pode mas votar";
			 
			 }else{  // ainda nao votou
			 
			 $opcao=$codigo;
			  $ADDPROMO=ADDPROMOCAO($promocao,$opcao,$id_promocao,$cliente);
			 
			 $mensagem= "Voto realizado";
			 
            /// votar na enquete
			  $query=LISTENQUETE($codigo);
			  $row_list= mysql_fetch_assoc($query);

             $totalRows_list = mysql_num_rows($query);
			 
			 $total=$row_list["n"];
			 $total=$total + 1;
			  
			  
			  $upd=UPDATENQUETE($codigo,$total);

	           
             }


						
			  ?>
						  
						
                          <tr>
                            <td align="left" valign="top" class="ft_pt_13">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="center" valign="top"><span class="ft_pt_18">
							
							<?php echo $mensagem; ?>
							</span></td>
                          </tr>
                          <tr>
                            <td height="65" valign="top">&nbsp;</td>
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