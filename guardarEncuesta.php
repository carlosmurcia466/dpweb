<?php
session_start();
$pre1=$_POST['opcion'];
$pre2=$_POST['2'];
$pre3=$_POST['3'];
$pre4=$_POST['4'];
$pre5=$_POST['5'];
$pre6=$_POST['6'];
$pre7=$_POST['7'];
$pre8=$_POST['8'];
$pre9=$_POST['9'];
$pre10=$_POST['10'];
$pre11=$_POST['11'];
$pre12=$_POST['12'];
$pre13=$_POST['13'];
$pre14=$_POST['15'];
$id=$_SESSION['sIdUsuario'];



 mysql_connect("sql212.eshost.com.ar","eshos_19505084","dpweb123");
		mysql_select_db("eshos_19505084_dpweb");
    //mysql_connect("localhost","root","");
    //mysql_select_db("dpweb");

$sql="Insert into encuesta values(NULL, '$pre1','$pre2','$pre3','$pre4','$pre5','$pre6','$pre7','$pre8','$pre9','$pre10','$pre11','$pre12','$pre13','$pre14', '$id')";

$resultado=mysql_query($sql);

if($resultado)
{
	echo '<script> alert("Encuesta guardada."); </script>';
	echo '<script> window.location="encuesta.php"; </script>';
}
else
{

	echo '<script> alert("Ocurrió un error por favor intenta de nuevo..."); </script>';
	echo '<script> window.location="encuesta.php"; </script>';
        //echo $sql;
}
mysql_connect();
?>
	