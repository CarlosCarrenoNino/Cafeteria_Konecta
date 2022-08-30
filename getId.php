<?php

 require('Conexion.php');    

 $id_referencia = $_POST['referencia'];

 $referencia = "SELECT Pro_Nid FROM tbl_productos WHERE Pro_CReferencia = '$id_referencia'";
 $consultareferencia = mysqli_query($conn, $referencia);
 


 while($rowreferecia = mysqli_fetch_array($consultareferencia))
 {
     $html.= "<option value='".$rowreferecia['Pro_Nid']."'>".$rowreferecia['Pro_Nid']."</option>";
 }

 echo $html;

?>