<?php

require('Conexion.php');


date_default_timezone_set('America/Bogota');
$fechaHoy = date('Y/m/d');
$horaHoy = date('H:i:s');


if ( isset ( $_POST['enviar'])) {
    
    $nombre = $_POST['nombre'];
    $referencia = $_POST['referencia'];
    $precio = $_POST['precio'];
    $peso = $_POST['peso'];
    $categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    

    
    $registrar = "INSERT INTO `tbl_productos`(`Pro_CNombre_Producto`, `Pro_CReferencia`, 
    `Pro_NPrecio`, `Pro_NPeso`, `Pro_CCategoria`, `Pro_NStock`, `Pro_DFecha_Creacion`, 
    `Pro_DHora_Creacion`) VALUES ('$nombre','$referencia','$precio','$peso','$categoria','$stock',
    '$fechaHoy','$horaHoy')";

    $resultadoregistrar = mysqli_query ($conn, $registrar);

    if (!$resultadoregistrar ) {
      die ( "Consulta fallida" );
    }
    
    echo "<script>alert('Producto Guardado.');window.location='Stock.php';</script>";
     
  
}   


?>