<?php
session_start();
extract($_REQUEST);

mysql_connect("sql212.eshost.com.ar","eshos_19505084","dpweb123");
		mysql_select_db("eshos_19505084_dpweb");

//mysql_connect('localhost','root','')or die('Error: '.mysql_error());
//mysql_select_db('dpweb')or die('Error: '.mysql_error());

if(!isset($cantidad)){$cantidad=1;}
$qry=mysql_query("select * from productos where idProducto='".$id."'");
$row=mysql_fetch_array($qry);

if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];

$carro[md5($id)]=array( 'identificador'=>md5($id),
'existencias'=>$cantidad,'nombre'=>$row['nombre'],
'precio'=>$row['precio'],'idProducto'=>$id);

$_SESSION['carro']=$carro;

header("Location:productos.php?".SID);
?>
