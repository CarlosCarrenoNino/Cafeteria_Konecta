<?php

 require('Conexion.php');    

 $id_referencia = $_POST['referencia'];

 $stock = "SELECT Pro_NStock FROM tbl_productos WHERE Pro_CReferencia = '$id_referencia'";
 $consultastock = mysqli_query($conn, $stock);
 


 while($rowstock = mysqli_fetch_array($consultastock))
 {
     $html.= "<option value='".$rowstock['Pro_NStock']."'>".$rowstock['Pro_NStock']."</option>";
 }

 echo $html;

?>