<?php require_once('Connections/conexao.php'); ?>
<?php require_once('inc/inc_admin.php'); ?>

<?php 

$promocao=$_GET["id"];


$query=FORAUPDATE($promocao) ;

echo "<script> document.location.href='sorteio.php'; 
</script>";

?>