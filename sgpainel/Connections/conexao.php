<?php

# FileName="Connection_php_mysql.htm"

# Type="MYSQL"

# HTTP="true"

$hostname_conexao = "localhost";

$database_conexao = "pizzagulladeli2";

$username_conexao = "root";

$password_conexao = "";




//$conexao=mysql_connect ($hostname_conexao, $username_conexao, $password_conexao) or die ('I cannot connect to the database because: ' . mysql_error());
//mysql_select_db ($database_conexao);


 $conexao=mysql_connect ($hostname_conexao, $username_conexao, $password_conexao) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database_conexao);


//if(!($conexao = mysql_pconnect($hostname_conexao, $username_conexao, $password_conexao))){

 //echo "<meta http-equiv=refresh content=0;URL=>";

//exit;}

?>