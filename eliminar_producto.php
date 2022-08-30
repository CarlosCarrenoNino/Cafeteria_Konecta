<?php

include("Conexion.php");


if(@$_POST['BtnEliminar']){

    foreach($_POST['Idproducto'] as $Id_producto){
        $Eliminar = 'DELETE FROM tbl_productos WHERE Pro_Nid = '.$Id_producto;
        $result = mysqli_query($conn, $Eliminar);    
    }

    echo "<script>alert('Producto Eliminado.');window.location='Stock.php';</script>";
}


?>