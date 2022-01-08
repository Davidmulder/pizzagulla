
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pizza Gulla - Coma sem pecado!</title>
<link rel="shortcut icon" href="fatias/obp.ico">
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
                                    <td align="left"><img src="fatias/pg_img_tit_contatos.png" width="214" height="27"></td>
                                  </tr>
                                </table></td>
                                <td width="320" height="120">&nbsp;</td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td valign="top" class="ft_pt_18">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="ft_pt_13">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="center" valign="top"><font color="#000000" size="2" face="Arial, Helvetica, sans-serif">
                              <?
$msg = "Mensagem enviada em ".date("d/m/Y").", os dados seguem abaixo:<p>";
while(list($campo, $valor) = each($HTTP_POST_VARS)) {
if(($campo <> 'enviar')) 
  $msg .= ucwords($campo).": ".$valor."<p>";
}
mail("jairoanete@gmail.com","$assunto",$msg,"From:$email\nContent-type: text/html; charset=us-ascii");
echo "Seu e-mail foi enviado com sucesso. Obrigado ";
echo "Aguarde....";
print "<meta http-equiv=refresh content=0;URL=contatos.php>";

?>
                            </font></td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
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