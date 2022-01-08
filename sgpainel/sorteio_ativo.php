<?php 
$enqid=$_GET["id"];

setcookie("venqid", $enqid, time()+3600);  /* expira em 1 hora */

echo "<script>
document.location.href='sorteio.php';
</script>";
?>