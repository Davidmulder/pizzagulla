<?php 
global $MySQL; //Torna a variável acessível em todas as funções
function MyCONN(){ //faz a conexão com o servidor 
	$hostname_conexao = "mysql.db2.net2.com.br";

$database_conexao = "pizzagulladeli2";

$username_conexao = "pizzagulladeli2";

$password_conexao = "pizza121314";

 $conexao=mysql_connect ($hostname_conexao, $username_conexao, $password_conexao) or die (' Não Conectado' . mysql_error());
mysql_select_db ($database_conexao);
return $conexao;
};

// visualizar email do adminstrador
function LOGN($area,$acao,$usuario) {
$conexao=MyCONN();
$vdata=date("y/m/d")." ".date("h:i:s");
$query_busca = "insert into log
				(area,acao,usuario,data)
				values
				('$area','$acao','$usuario','$vdata') ";
$vlog= mysql_query($query_busca, $conexao) or die(mysql_error());
return $vlog;
$totalRows_vlog = mysql_num_rows($vlog);
$row_vlog = mysql_fetch_assoc($vlog);
return $row_vlog;

}






// visualizar email do adminstrador
function ADDDESTAQUE($titulo,$foto,$link,$idnoticia,$resumo,$dest) {

if($idnoticia > "0") {
$link2="noticia.php?id=".$idnoticia;
}else{
$link2=$link;
}

$conexao=MyCONN();
$vdata=date("y/m/d")." ".date("h:i:s");
$query_busca = "
insert into destaque
(titulo,foto,resumo,link,tipo,data)
				values
				('$titulo','$foto','$resumo','$link','$dest','$vdata')  ";
$vlog= mysql_query($query_busca, $conexao) or die(mysql_error());
return $vlog;
$totalRows_vlog = mysql_num_rows($vlog);
$row_vlog = mysql_fetch_assoc($vlog);
return $row_vlog;

}


function UPDDESTAQUE($titulo,$foto,$link,$idnoticia,$resumo,$dest,$id) {

if($idnoticia > "0") {
$link2="noticia.php?id=".$idnoticia;
}else{
$link2=$link;
}

$conexao=MyCONN();
$vdata=date("y/m/d")." ".date("h:i:s");
$query_busca = "update destaque set
                 titulo='$titulo',foto='$foto',resumo = '$resumo',link='$link2',tipo = '$dest'
				where id = '$id' ";
$vlog= mysql_query($query_busca, $conexao) or die(mysql_error());
return $vlog;
$totalRows_vlog = mysql_num_rows($vlog);
$row_vlog = mysql_fetch_assoc($vlog);
return $row_vlog;

}


// visualizar email do adminstrador
function FORAUPDATE($promocao) {
$conexao=MyCONN();
$query_busca = "update promocao set
				ativo = '0'
				where  id = '$promocao' ";
$vlog= mysql_query($query_busca, $conexao) or die(mysql_error());
return $vlog;
$totalRows_vlog = mysql_num_rows($vlog);
$row_vlog = mysql_fetch_assoc($vlog);
return $row_vlog;

}




?>