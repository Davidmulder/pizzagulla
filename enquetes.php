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
<?php 
$sopinha = "1231546478795410002154785632145";
srand((double)microtime()*1000000);

for($i=0;$i<9;$i++){

$codigo.=$sopinha[rand()%strlen($sopinha)];
}
// criar codigo do novo cliente


//setcookie("vcliente", $codigo, time()+3600);  /* expira em 1 hora */


?>
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
                            <td valign="top" class="ft_pt_18">Área de acesso ao sistema de enquetes Pizza Gulla</td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="ft_pt_13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top">
							<span class="ft_vm_11">
							<?php if ($_GET["var"] =='1') { ?>
							
							Acesso Negado<br>
							
							<a href="enquetes.php">Tentar de novo</a>
							<?php }else{  ?>
							</span>
							<table width="650" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="left" class="ft_pt_18">Ainda n&atilde;o sou cadastrado</td>
                                <td class="ft_pt_18">J&aacute; sou cadastrado</td>
                                </tr>
                              <tr>
                                <td align="left" valign="top" class="ft_vm_11"> Todos os campos s&atilde;o obrigat&oacute;rios. </td>
                                <td valign="top">&nbsp;</td>
                                </tr>
                              <tr>
                                <td width="325" align="left" valign="top"><form action="add_promocao.php" method="post" name="ncadastrado" id="ncadastrado">
                                  <table width="300" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td class="ft_pt_11">Nome:</td>
                                      </tr>
                                    <tr>
                                      <td><label>
                                        <input name="nome" type="text" class="cx_cont" id="nome" size="30">
                                        </label></td>
                                      </tr>
                                    <tr>
                                      <td class="ft_pt_11" id="esp2">&nbsp;</td>
                                      </tr>
                                    <tr>
                                      <td class="ft_pt_11">E-mail:</td>
                                      </tr>
                                    <tr>
                                      <td><label>
                                        <input name="email" type="text" class="cx_cont" id="email" size="30">
                                        </label></td>
                                      </tr>
                                    <tr>
                                      <td class="ft_pt_11" id="esp2">&nbsp;</td>
                                      </tr>
                                    <tr>
                                      <td class="ft_pt_11">Confirma&ccedil;&atilde;o de E-mail:</td>
                                      </tr>
                                    <tr>
                                      <td><input name="confirmação_email" type="text" class="cx_cont" id="confirmação_email" size="30"></td>
                                      </tr>
                                    <tr>
                                      <td id="esp2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="ft_pt_11" id="esp">Senha:</td>
                                    </tr>
                                    <tr>
                                      <td id="esp2"><input name="senha" type="password" class="cx_cont" id="senha" size="30"></td>
                                    </tr>
                                    <tr>
                                      <td id="esp2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="ft_pt_11" id="esp6">Confirma&ccedil;&atilde;o de Senha:</td>
                                    </tr>
                                    <tr>
                                      <td id="esp2"><input name="confirmação_senha" type="password" class="cx_cont" id="confirmação_senha" size="30">
                                        <input name="cad" type="hidden" id="cad" value="1">
                                        <input name="codigo" type="hidden" id="codigo" value="<?php echo $codigo; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td id="esp2">&nbsp;</td>
                                      </tr>
                                    <tr>
                                      <td align="left"><label>
                                        <input type="image" name="imageField" id="imageField" src="fatias/pg_bt_enviar.png">
                                        </label></td>
                                      </tr>
                                    <tr>
                                      <td align="left">&nbsp;</td>
                                      </tr>
                                    </table>
                                  </form></td>
                                <td width="325" valign="top"><table width="300" border="0" cellspacing="0" cellpadding="0" class="bd_card">
                                  <tr>
                                    <td align="center"><form action="add_promocao.php" method="post" name="cadastrado" id="cadastrado">
                                      <table width="280" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td class="ft_pt_11">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_pt_11">E-mail:</td>
                                        </tr>
                                        <tr>
                                          <td><label>
                                            <input name="email" type="text" class="cx_cont" id="email" size="30">
                                          </label></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_pt_11" id="esp2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_pt_11">Senha:</td>
                                        </tr>
                                        <tr>
                                          <td><label>
                                            <input name="senha" type="password" class="cx_cont" id="senha" size="30">
                                          </label></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_pt_11" id="esp2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_pt_11">Esqueci minha senha.</td>
                                        </tr>
                                        <tr>
                                          <td id="esp2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="left"><label>
                                            <input type="image" name="imageField2" id="imageField2" src="fatias/pg_bt_enviar.png">
                                            <input name="cad" type="hidden" id="cad" value="2">
                                          </label></td>
                                        </tr>
                                        <tr>
                                          <td align="left">&nbsp;</td>
                                        </tr>
                                        </table>
                                    </form></td>
                                  </tr>
                                </table></td>
                                </tr>
                              </table>
							  <?php }?>							  </td>
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