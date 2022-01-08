<?php require_once('inc/inc_pizza.php'); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>s3Slider jQuery plugin</title>

<!-- CSS -->
<style type="text/css" media="screen">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.clear {	
	clear: both;
}
/*fonte título*/
.slider1Image span strong {
    font-size: 14px;
	color: #ffffff;

}
/*posição tarja*/
.left {
	top: 0;
    left: 0;
	width: 110px !important;
	height: 280px;
}
.right {
	right: 0;
	bottom: 0;
	width: 110px !important;
	height: 280px;
}
.top {
	top:0;
	left:0;
	width: 10px !important;
	height: 30px;
	}
.bottom{
	bottom:20px;
	left:20px;
	width: 300px !important;
	height: 100px;
	}

/*fonte descrição*/
.slider1Image span {
    position: absolute;
	font: 12.5px Arial, Helvetica, sans-serif;
	text-align: left;
	padding: 10px 10px;
   	color: #ffffff;
    background-color: #900;
    filter: alpha(opacity=90);
    -moz-opacity: 0.9;
	-khtml-opacity: 0.9;
    opacity: 0.9;
    display: none;
	-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px;

}
.ft_am_11 span {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #fff;
}
/*configurações da imagem*/
.slider1Image {
	float: left;
    position: relative;
	display: block;
	
	
}
#slider1 {
	width: 650px; /* important to be same as image width */
	height: 217px; /* important to be same as image height */
	position: relative; /* important */
	overflow: hidden; /* important */
	border: 0;
	-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px;
	
}
/*conteúdo da imagem*/
#slider1Content {
	width: 650px; /* important to be same as image width or wider */
	position: absolute;
	margin-top: -100px;
	margin-left: -40px;
	margin-right: 100px;
-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px;
	

}
ul { list-style-type: none;}
.slider1Image {
	float: left;
	bottom: -100;
    position: relative;
	display: none;
	-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px;
	

	}

a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFF;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: none;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
-->
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="banner/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider1').s3Slider({
            timeOut: 5000 
        });
    });
</script>
</head>
<div id="slider1">

<?php 
$query=HOME();

	         $row_home= mysql_fetch_assoc($query);

             $totalRows_home = mysql_num_rows($query);

?>

  <ul id="slider1Content" name="slider1Content">
  <?php do { ?>
    <li class="slider1Image"><img src="<?php echo $row_home["foto"]; ?>" alt="<?php echo $row_home["titulo"]; ?>" />
	<a href="<?php echo $row_home["id"]; ?>" target="_parent"><span class="bottom"><strong><?php echo $row_home["titulo"]; ?></strong>
    <br><?php echo $row_home["resumo"]; ?></span></a></li>
	
	<?php  } while ($row_home = mysql_fetch_assoc($query)); ?>
	
    
    <div class="clear slider1Image"></div>
      </ul>
</div>