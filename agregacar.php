<?php
session_start();
extract($REQUEST);
include ('conexion.php');

if(!isset($cantidad)){$cantidad=1;}
$qry=mysql_query("select * from catalogo where id="'.id.'"");
$row=mysql_fetch_array($qry);

if(isset()$SESSION['carro'])
$carro=$SESSION['carro'];

$carro[md5($id)]=array('identificador'=md5($id),
'cantidad'=>$cantidad,'producto'=>row['producto'],
'precio'=>$row['precio'],'id'=$id);

$_SESSION['carro']=$carro;

header("Location:catalogo.php?.SID");
?>
