<?php



include("Conexion.php");

date_default_timezone_set('America/Bogota');
$fechaHoy = date('Y/m/d');
$horaHoy = date('H:i:s');

if(isset($_GET['Pro_Nid'])){
    $id = $_GET['Pro_Nid'];
    $Selccionid = "SELECT * FROM tbl_productos WHERE Pro_Nid = $id";
    $result= mysqli_query($conn, $Selccionid);

    if(mysqli_num_rows($result) ==1){

        $row = mysqli_fetch_array($result);
        $Pro_CNombre_Producto = $row['Pro_CNombre_Producto'];
        $Pro_CReferencia = $row['Pro_CReferencia'];
        $Pro_NPrecio = $row['Pro_NPrecio'];
        $Pro_NPeso = $row['Pro_NPeso'];
        $Pro_CCategoria = $row['Pro_CCategoria'];
        $Pro_NStock = $row['Pro_NStock'];
  
    
    }
}

if(isset($_POST['actualizar'])){
        
    $id = $_GET['Pro_Nid'];
    $nombre = $_POST['nombre'];
    $referencia = $_POST['referencia'];
    $precio = $_POST['precio'];
    $peso = $_POST['peso'];
    $categoria = $_POST['categoria'];
    $stock = $_POST['stock'];

    $actualizar = "UPDATE tbl_productos set Pro_CNombre_Producto = '$nombre', 
    Pro_CReferencia = '$referencia', Pro_NPrecio = '$precio', Pro_NPeso = '$peso', 
    Pro_CCategoria ='$categoria', Pro_NStock = '$stock', Pro_DFecha_Update='$fechaHoy', 
    Pro_DHora_Update='$horaHoy' WHERE Pro_Nid = $id";
    mysqli_query($conn, $actualizar);

    echo "<script>alert('Producto Actualizado.');window.location='Stock.php';</script>";
    
}

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cafeteria- Stock | Konecta </title>
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
                        <h1 class="mt-4">Stock - Registro de Productos | Cafeteria Konecta </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Stock.php">Stock - Registro de Productos</a></li>
                            <li class="breadcrumb-item active">Editar Producto</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

                                <form action="editar_producto.php?Pro_Nid=<?php echo $_GET['Pro_Nid']; ?>" method = "POST">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                
                                                <h4>Formulario</h4>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for=""><b>Nombre Producto</b></label>
                                                        <input required type="text" class="form-control"  name="nombre" id="nombre1" value="<?php echo $Pro_CNombre_Producto ?>">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for=""><b>Referencia</b></label>
                                                        <input required type="text" class="form-control"  name="referencia" id="referencia1" value="<?php echo $Pro_CReferencia ?>" >
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for=""><b>Precio</b></label>
                                                        <input required type="number" class="form-control"  name="precio" id="precio1" value="<?php echo $Pro_NPrecio ?>">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for=""><b>Peso</b></label>
                                                        <input required type="number" class="form-control"  name="peso" id="peso1" value="<?php echo $Pro_NPeso ?>">
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label for=""><b>Categoria</b></label>
                                                        <select required class="form-control"  name="categoria" id="categoria1">
                                                        <option value="<?php echo $Pro_CCategoria ?>"><?php echo $Pro_CCategoria ?></option>
                                                        <option value="Comida">Comida</option>
                                                        <option value="Bebidas">Bebidas</option>
                                                        <option value="Aseo">Aseo</option>
                                                        <option value="Otro">Otro</option>
                                                        
                                                        </select>
                                                        
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for=""><b>Stock</b></label>
                                                        <input required type="number" class="form-control"  name="stock" id="stock1" value="<?php echo $Pro_NStock ?>" >
                                                    </div>

                                                    <div class="col-md-3" id="alert_exitosa">
                                                        <button type="submit" class="form-control btn btn-success"  name="actualizar" id="actualizar1" style="margin-top: 33px;" >Actualizar</button>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </form>
                               
                            </div>
                        </div>
                    </div>
                </main>
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
        

    </body>
</html>