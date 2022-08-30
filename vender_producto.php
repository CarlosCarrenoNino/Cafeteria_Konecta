<?php

require('Conexion.php');


date_default_timezone_set('America/Bogota');
$fechaHoy = date('Y/m/d');
$horaHoy = date('H:i:s');


if ( isset ( $_POST['vender'])) {

    
    $nombre = $_POST['nombre'];
    $referencia = $_POST['referencia'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $cantidad = $_POST['cantidad'];
    $idnew = $_POST['idnew'];
    $StockActual = $stock - $cantidad;

    if($stock == 0 || $cantidad > $stock){


        echo "<script>alert('Venta NO Realizada, NO HAY STOCK DEL PRODUCTO.');window.location='Ventas.php';</script>";


    }else{

        $registrar = "INSERT INTO `tbl_ventas`(`Ven_CNombre_Pro`, `Ven_CReferencia`,
        `Ven_NPrecio`, `Ven_NCantidad`, `Ven_DFecha`, `Ven_DHora`) VALUES ('$nombre','$referencia',
        '$precio','$cantidad','$fechaHoy','$horaHoy')";

        $resultadoregistrar = mysqli_query ($conn, $registrar);

        if (!$resultadoregistrar ) {
        die ( "Consulta fallida insertar" );
        }

        $actualizarStock ="UPDATE `tbl_productos` SET `Pro_NStock`= '$StockActual',
        Pro_DFecha_Update = '$fechaHoy', Pro_DHora_Update='$horaHoy' WHERE `Pro_Nid` = '$idnew' ";

        $resultadoactualizarStock = mysqli_query($conn, $actualizarStock);

        if(!$resultadoactualizarStock){
            die("Consulta fallida actulizar stock");
        }
        
        echo "<script>alert('Venta Realizada Exitosa.');window.location='Ventas.php';</script>";

    }
    

    
    
     
  
}   


?>