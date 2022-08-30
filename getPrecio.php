<?php

 require('Conexion.php');    

 $id_referencia = $_POST['referencia'];

 $precio = "SELECT Pro_NPrecio FROM tbl_productos WHERE Pro_CReferencia = '$id_referencia'";
 $consultaprecio = mysqli_query($conn, $precio);
 

 while($rowprecio = mysqli_fetch_array($consultaprecio))
 {
     $html.= "<option value='".$rowprecio['Pro_NPrecio']."'>".$rowprecio['Pro_NPrecio']."</option>";
 }

 echo $html;

?>