<?php

 require('Conexion.php');    

 $id_nombre = $_POST['nombre'];

 $referencia = "SELECT Pro_CReferencia FROM tbl_productos WHERE Pro_CNombre_Producto = '$id_nombre'";
 $consultareferencia = mysqli_query($conn, $referencia);
 
 $html= "<option value=''>Seleccione una Referencia</option>";

 while($rowreferecia = mysqli_fetch_array($consultareferencia))
 {
     $html.= "<option value='".$rowreferecia['Pro_CReferencia']."'>".$rowreferecia['Pro_CReferencia']."</option>";
 }

 echo $html;

?>