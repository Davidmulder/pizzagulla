<?php require_once('inc/inc_pizza.php'); ?>
<?php 

// coleta de dados
$nome=anti_injection($_POST["nome"]);
$email=anti_injection($_POST["email"]);
$senha=anti_injection($_POST["senha"]);







//............................................

$cad=anti_injection($_POST["cad"]);

if($cad =='1') {  // cadastro de cliente

$codigo=anti_injection($_POST["codigo"]);

$ADDCLI=ADDCLIE($codigo,$nome,$email,$senha);
$vnivel="100100";

setcookie("vcliente", $codigo, time()+3600);  /* expira em 1 hora */
setcookie("vcliente_nome", $nome, time()+3600);  /* expira em 1 hora */
setcookie("vnivel", $vnivel, time()+3600);  /* expira em 1 hora */

echo "<script>
document.location.href='enquetes_ver.php';
</script>";


}elseif($cad =='2') {  // login de usuario

$login=$email;

$query2=LOGINCLIENTE($login,$senha);

$row_logins= mysql_fetch_assoc($query2);

$totalRows_logins = mysql_num_rows($query2);

if($totalRows_logins<>0){  // acesso permitido


$cliente=$row_logins["id"];
$cliente_nome=$row_logins["nome"];
$cliente_email=$row_logins["email"];
$vnivel="100100";

setcookie("vcliente", $cliente, time()+3600);  /* expira em 1 hora */
setcookie("vcliente_nome", $cliente_nome, time()+3600);  /* expira em 1 hora */
setcookie("vnivel", $vnivel, time()+3600);  /* expira em 1 hora */


echo "<script>
document.location.href='enquetes_ver.php';
</script>";


}else{ // acesso negado

$aviso="Usuario sem acesso";

setcookie("vaviso", $aviso, time()+3600);  /* expira em 1 hora */





echo "<script>
document.location.href='enquetes.php?var=1';
</script>";
} // codição



} // pedido




?>
