<?php

date_default_timezone_set('America/Bogota');
$fechaHoy = date('d/m/Y');
$fechaHoy1 = date('Y/m/d');
$horaHoy = date('H');
$minutoHoy = date('i');
$HoraTotal = $horaHoy.':'.$minutoHoy;

require('Conexion.php');


?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cafeteria - Ventas | Konecta </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/color_skins.css">
        <link rel="stylesheet" href="assets/css/color_skins.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/Chart.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
           
            <a class="navbar-brand ps-3" href="Clientes.php">Konecta Cafetería</a>
            
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menú</div>
                            <a class="nav-link" href="Ventas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                                Ventas
                            </a>
                            <div class="sb-sidenav-menu-heading">Productos</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                                Stock
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Stock.php">Registrar Productos</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Login
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.php">Cerrar Sesion</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ventas | Cafeteria Konecta </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Stock.php">Stock - Registro de Productos</a></li>
                            <li class="breadcrumb-item active">Ventas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="vender_producto.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                
                                                <h4 Style="text-align:center;">Registrar Venta</h4><br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        
                                                        <label for=""><b>Nombre Producto</b></label>
                                                        <select required class="form-control" name="nombre" id="nombre1">
                                                            <option value="">Seleccione Producto a Vender</option>
                                                            <?php 
                                                                $producto="SELECT * FROM tbl_productos";
                                                                $Consultaproducto=mysqli_query($conn, $producto);

                                                                while($productos=mysqli_fetch_array($Consultaproducto)){

                                                                    $Pro_Nid = $productos['Pro_Nid'];
                                                                    $Pro_CNombre_Producto = $productos ['Pro_CNombre_Producto'];
                                                            ?> 

                                                            <option value="<?php echo $Pro_CNombre_Producto ?>"><?php echo $Pro_CNombre_Producto ?></option>
                                                            <?php
                                                            }
                                                                
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for=""><b>Referencia</b></label>
                                                        <select required class="form-control" name="referencia" id="referencia1">
                                                            <option value="">Seleccione una Referencia</option>
                                                        </select>

                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for=""><b>Precio</b></label>
                                                        <select required class="form-control" name="precio" id="precio1">
                                                            
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for=""><b>Stock</b></label>
                                                        <select required class="form-control" name="stock" id="stock1">
                                                            
                                                        </select>

                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label for=""><b>Cantidad a Vender</b></label>
                                                        <input required type="number" class="form-control"  name="cantidad" id="cantidad1" >
                                                    </div>

                                                    <div class="col-md-3">
                                                        <button type="submit" class="form-control btn btn-primary"  name="vender" id="vender1" style="margin-top: 33px;" >Vender</button>

                                                    </div>

                                                    <div class="col-md-3">
                                                        <select style="visibility:hidden" class="form-control" name="idnew" id="idnew1">
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </form>
                               
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Ventas Realizadas
                                </div>
                                <div class="card-body">

                                    <table id="table_id" class="display">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">Nombre Producto</th>
                                                <th style="text-align:center;">Referencia</th>
                                                <th style="text-align:center;">Precio</th>
                                                <th style="text-align:center;">Cantidad</th>
                                                <th style="text-align:center;">Fecha</th>
                                                <th style="text-align:center;">Hora</th>
                                            
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                            <?php
                                                $Stock="SELECT `Ven_Nid`,`Ven_CNombre_Pro`,`Ven_CReferencia`,`Ven_NPrecio`,
                                                `Ven_NCantidad`, `Ven_DFecha`,`Ven_DHora` FROM `tbl_ventas`";

                                                $ConsultaStock=mysqli_query($conn,$Stock);

                                                while($resultado=mysqli_fetch_array($ConsultaStock)){

                                                    $Ven_Nid = $resultado['Ven_Nid'];
                                                    $Ven_CNombre_Pro = $resultado['Ven_CNombre_Pro'];
                                                    $Ven_CReferencia = $resultado['Ven_CReferencia'];
                                                    $Ven_NPrecio = $resultado['Ven_NPrecio'];
                                                    $Ven_NCantidad = $resultado['Ven_NCantidad'];
                                                    $Ven_DFecha = $resultado['Ven_DFecha'];
                                                    $Ven_DHora = $resultado['Ven_DHora'];

                                                
                                                ?>
                                                <tr>
                                                    <td style="text-align:center;"> <?php echo $Ven_CNombre_Pro ;?> </td>
                                                    <td style="text-align:center;"> <?php echo $Ven_CReferencia ;?> </td>
                                                    <td style="text-align:center;"> <?php echo $Ven_NPrecio ;?> </td>
                                                    <td style="text-align:center;"> <?php echo $Ven_NCantidad ;?> </td>
                                                    <td style="text-align:center;"> <?php echo $Ven_DFecha ;?> </td>
                                                    <td style="text-align:center;"> <?php echo $Ven_DHora ;?> </td>
                                                    
                                                
                                                </tr>
                                                
                                                <?php
                                                }
                                                ?> 
                                        </tbody>
                                    </table>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                
                <script language="javascript">
                    $(document).ready(function(){
                        $("#nombre1").change(function () {
                            $("#nombre1 option:selected").each(function () {
                                nombre= $(this).val();
                                $.post("getReferencia.php",{nombre:nombre},function(data){
                                    $("#referencia1").html(data);
                                        console.log(data)

                                });
                            });
                        })
                    });
                </script>

                <script language="javascript">
                    $(document).ready(function(){
                        $("#referencia1").change(function () {
                            $("#referencia1 option:selected").each(function () {
                                referencia= $(this).val();
                                $.post("getPrecio.php",{referencia:referencia},function(data){
                                    $("#precio1").html(data);
                                        console.log(data)

                                });
                            });
                        })
                    });
                </script>

                <script language="javascript">
                    $(document).ready(function(){
                        
                        $("#referencia1").change(function () {
                            $("#referencia1 option:selected").each(function () {                            
                                referencia= $(this).val();                                
                                $.post("getStock.php",{referencia:referencia},function(data){
                                    $("#stock1").html(data);
                                        console.log(data)

                                });
                            });
                        })
                    });
                </script>

                <script language="javascript">
                    $(document).ready(function(){
                        $("#referencia1").change(function () {
                            $("#referencia1 option:selected").each(function () {
                                referencia= $(this).val();
                                $.post("getId.php",{referencia:referencia},function(data){
                                    $("#idnew1").html(data);
                                        console.log(data)

                                });
                            });
                        })
                    });
                </script>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Carlos Niño Desarrollador Konecta 2022 Privacy Policy Terms & Conditions </div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="assets/bundles/libscripts.bundle.js"></script> 
        <script src="assets/bundles/vendorscripts.bundle.js"></script>
        <script src="assets/bundles/chartist.bundle.js"></script> 
        <script src="assets/bundles/knob.bundle.js"></script> 
        <script src="../assets/vendor/toastr/toastr.js"></script>
        <script src="assets/bundles/mainscripts.bundle.js"></script> <
        <script src="assets/js/index.js"></script>
        <script src="js/main.js"></script>

        <script>
            $(document).ready( function () {
            $('#table_id').DataTable();
            } );
            $(document).ready(function() {
               
                $('.dropify').dropify();


                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Arrastra y suelta un archivo aquí o haz clic',
                        replace: 'Arrastre y suelte un archivo o haga clic para reemplazar',
                        remove: 'Suprimir',
                        error: 'Lo sentimos, el archivo es demasiado grande.'
                    }
                });


                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element) {
                    return confirm("Deseas Eliminarlo..? \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element) {
                    alert('Archivo Borrado');
                });

                drEvent.on('dropify.errors', function(event, element) {
                    console.log('Error');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e) {
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

        <script>

            $(document).ready(function(){
                $("#progress").hide();
                $("#CargarBase").hide();
                $("#CargueUser").hide();


            })

            $("#carga").click(function(){
                $("#progress").show();
            })

            $("#BaseMasiva").click(function(){
                $("#UnUsuario").hide();
                $("#BaseMasiva").hide();
                $("#CargarBase").show();
                $("#CargueUser").show();

            })


            $("#CargueUser").click(function(){
                $("#CargarBase").hide();
                $("#CargueUser").hide();
                $("#BaseMasiva").show();
                $("#UnUsuario").show();

            })


                $(document).ready(function() {
                    $('#myTable').DataTable();
                    $(document).ready(function() {
                        var table = $('#example').DataTable({
                            "columnDefs": [{
                                "visible": false,
                                "targets": 2
                            }],
                            "order": [
                                [2, 'asc']
                            ],
                            "displayLength": 25,
                            "drawCallback": function(settings) {
                                var api = this.api();
                                var rows = api.rows({
                                    page: 'current'
                                }).nodes();
                                var last = null;
                                api.column(2, {
                                    page: 'current'
                                }).data().each(function(group, i) {
                                    if (last !== group) {
                                        $(rows).eq(i).before('<tr class="group"><td colspan="1">' + group + '</td></tr>');
                                        last = group;
                                    }
                                });
                            }
                        });

                        $('#example tbody').on('click', 'tr.group', function() {
                            var currentOrder = table.order()[0];
                            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                                table.order([2, 'desc']).draw();
                            } else {
                                table.order([2, 'asc']).draw();
                            }
                        });
                    });
                });

        </script>


    </body>
</html>
