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

function anti_injection($sql, $formUse = true)   
{   
// remove palavras que contenham sintaxe sql   
$sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/i","",$sql);   
$sql = trim($sql);//limpa espaços vazio   
$sql = strip_tags($sql);//tira tags html e php   
if(!$formUse || !get_magic_quotes_gpc())   
$sql = addslashes($sql);//Adiciona barras invertidas a uma string   
return $sql;   
} 



//..................................................................................


// arquivos dos clientes
function LOGINCLIENTE($vlogin,$vsenha) {
$conexao=MyCONN();
$query_busca = "select * from cliente where email = '$vlogin' and senha = '$vsenha' ";
$logins= mysql_query($query_busca, $conexao) or die(mysql_error());
return $logins;
$totalRows_logins = mysql_num_rows($logins);
$row_logins = mysql_fetch_assoc($logins);
return $row_logins;

}




// arquivos dos clientes
function CATEGORIA() {
$conexao=MyCONN();
$query_busca = "select * FROM categoria order by id";
$arq= mysql_query($query_busca, $conexao) or die(mysql_error());
return $arq;
$totalRows_arq = mysql_num_rows($arq);
$row_arq = mysql_fetch_assoc($arq);
return $row_arq;

}





// lista arqivos por area 
function PRODUTO($cat) {
$conexao=MyCONN();
$query_busca = "select produto.titulo,produto.texto,produto.valor,categoria.tipo from produto 
inner join categoria on (categoria.id = produto.id_cat)
where produto.id_cat = '$cat' order by produto.id";
$empred= mysql_query($query_busca, $conexao) or die(mysql_error());
return $empred;
$totalRows_empred = mysql_num_rows($empred);
$row_empred = mysql_fetch_assoc($empred);
return $row_empred;

}


// add cliente
function ADDCLIE($codigo,$nome,$email,$senha) {
$conexao=MyCONN();
$query_busca = "insert into cliente
(id,nome,email,senha)
values
('$codigo','$nome','$email','$senha') ";
$news= mysql_query($query_busca, $conexao) or die(mysql_error());
return $news;
$totalRows_news = mysql_num_rows($news);
$row_news = mysql_fetch_assoc($news);
return $row_news;

}





// lista as ultimas noticias
function LISTACLIE() {
$conexao=MyCONN();
$query_busca = "select * from cliente
 order by nome asc ";
$lista= mysql_query($query_busca, $conexao) or die(mysql_error());
return $lista;
$totalRows_lista = mysql_num_rows($lista);
$row_lista = mysql_fetch_assoc($lista);
return $row_lista;

}




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
function VEMAIL() {
$conexao=MyCONN();
$query_busca = "SELECT * FROM email where id = '7' order by id desc  ";
$vemail= mysql_query($query_busca, $conexao) or die(mysql_error());
return $vemail;
$totalRows_vemail = mysql_num_rows($vemail);
$row_vemail = mysql_fetch_assoc($vemail);
return $row_vemail;

}






// destaque
function HOME() {
$conexao=MyCONN();
$query_busca = "select dest.data,dest.titulo,dest.resumo,dest.foto,dest.link as id from destaque dest
				where dest.tipo = '1'
				order by id desc  ";
$home= mysql_query($query_busca, $conexao) or die(mysql_error());
return $home;
$totalRows_home = mysql_num_rows($home);
$row_home = mysql_fetch_assoc($home);
return $row_home;

}



// subdestaques
function SUBHOME() {
$conexao=MyCONN();
$query_busca = "select dest.data,dest.titulo,dest.resumo,dest.foto,dest.link  from destaque dest
				where dest.tipo = '2' 
				order by id desc   ";
$sub= mysql_query($query_busca, $conexao) or die(mysql_error());
return $sub;
$totalRows_sub = mysql_num_rows($sub);
$row_sub = mysql_fetch_assoc($sub);
return $row_sub;

}


// subdestaques portifolio
function TECEARIO($area) {
$conexao=MyCONN();
$query_busca = "select dest.data,dest.titulo,dest.resumo,dest.foto,dest.link as id from destaque dest
				where dest.tipo = '$area'
				order by id desc  ";
$terc= mysql_query($query_busca, $conexao) or die(mysql_error());
return $terc;
$totalRows_terc = mysql_num_rows($terc);
$row_terc = mysql_fetch_assoc($terc);
return $row_terc;

}




// lista noticias
function TODASNOTICIAS() {
$conexao=MyCONN();
$query_busca = "select id,titulo,data from news  where id_area = '1' order by id desc ";
$tod= mysql_query($query_busca, $conexao) or die(mysql_error());
return $tod;
$totalRows_tod = mysql_num_rows($tod);
$row_tod = mysql_fetch_assoc($tod);
return $row_tod;

}




// lista as ultimas noticias
function LISTANOTICIAS() {
$conexao=MyCONN();
$query_busca = "select  id,titulo,data,resumo from news  where id_area = '1' order by id desc ";
$lista= mysql_query($query_busca, $conexao) or die(mysql_error());
return $lista;
$totalRows_lista = mysql_num_rows($lista);
$row_lista = mysql_fetch_assoc($lista);
return $row_lista;

}


// adicionar newlleter
function NEWLETTER($email) {
$conexao=MyCONN();
$vdata=date("y/m/d")." ".date("h:i:s");
$query_busca = "insert into letter
				(email)
				values
				('$email')";
$letter= mysql_query($query_busca, $conexao) or die(mysql_error());
return $letter;
$totalRows_letter = mysql_num_rows($letter);
$row_letter = mysql_fetch_assoc($letter);
return $row_letter;

}




// noticias atual
function NEWS($id) {
$conexao=MyCONN();
if($id > "0") {
$query_busca = "select  id,titulo,data,texto,foto,resumo  from news  where id = '$id' order by id desc  ";
}else{
$query_busca = "select  id,titulo,data,resumo  from news where id_area = '1' order by id desc limit 1 ";
}
$news= mysql_query($query_busca, $conexao) or die(mysql_error());
return $news;
$totalRows_news = mysql_num_rows($news);
$row_news = mysql_fetch_assoc($news);
return $row_news;

}




// visualizar links
function AREA($area) {
$conexao=MyCONN();
$query_busca = "select  id,titulo,data,texto,foto,resumo from news  where id_area = '$area' order by id desc   ";
$varea= mysql_query($query_busca, $conexao) or die(mysql_error());
return $varea;
$totalRows_varea = mysql_num_rows($varea);
$row_varea = mysql_fetch_assoc($varea);
return $row_varea;

}


// visualizar links
function CONTATO() {
$conexao=MyCONN();
$query_busca = "select id,titulo,email from email  order by id desc   ";
$vemail= mysql_query($query_busca, $conexao) or die(mysql_error());
return $vemail;
$totalRows_vemail = mysql_num_rows($vemail);
$row_vemail = mysql_fetch_assoc($vemail);
return $row_vemail;

}





// funcao data e hora

function VERDATA($vdata) {
$hora=substr($vdata,10,18);
 $day=substr($vdata,8,2);
$mes=substr($vdata,5,2);
$ano=substr($vdata,0,4);
echo $day."/".$mes."/".$ano ;
}

function GETDATA($data) {
$hora=substr($vdata,10,18);
 $day=substr($vdata,8,2);
$mes=substr($vdata,5,2);
$ano=substr($vdata,0,4);
$DATA=$day."/".$mes."/".$ano ;
}


function GETSEMANA($diasemana) {
switch($diasemana) {
		case"0": $diasemana = "Domingo";       break;
		case"1": $diasemana = "Segunda-Feira"; break;
		case"2": $diasemana = "Terça-Feira";   break;
		case"3": $diasemana = "Quarta-Feira";  break;
		case"4": $diasemana = "Quinta-Feira";  break;
		case"5": $diasemana = "Sexta-Feira";   break;
		case"6": $diasemana = "Sábado";        break;
	}

echo "$diasemana";

}

function GETVALOR($preco) {
$number=number_format($preco,2,',','.');
echo $number;
}


?>