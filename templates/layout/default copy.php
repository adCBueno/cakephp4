<?php
$cakeDescription = 'Proyecto tienda';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
<!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


    <?= $this->Html->css([
        'plugins/fontawesome-free/css/all.min',
        'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min',
        'plugins/icheck-bootstrap/icheck-bootstrap.min',
        'plugins/jqvmap/jqvmap.min',
        'adminlte.min',
        'plugins/overlayScrollbars/css/OverlayScrollbars.min',
        'plugins/daterangepicker/daterangepicker',
        'plugins/summernote/summernote-bs4.min',
        ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Productos</a>
                </li>
            </ul>
        
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="https://logodownload.org/wp-content/uploads/2014/07/adidas-logo-branco.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-light">Comercial - VJRC</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://cdn-icons-png.flaticon.com/512/2922/2922566.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Adriana Calvo</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                   
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       <li class="nav-item">
                        <a href="indexA.html" class="nav-link active">                       
                            <p>
                                INICIO
                            </p>
                        </a>
                       </li>
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="fas fa-certificate"></i>
                                <p>
                                    Categorias
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                


                <?php foreach ($categorias as $categoria): ?>
                <tr>
                   
        
                    <li class="nav-item">
                                    <a href="televisores.html" class="nav-link">
                                        <i class="fas fa-angle-right"></i>
                                        <p><?= h($categoria->nombre) ?></p>
                                    </a>
                                </li>
                </tr>
                <?php endforeach; ?>

                                
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Inicio</h1>
                        </div>
                        
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!--CONTENT-->
            
                <!-- Content Header (Page header) -->
               
<div class="container"  style="padding-left: 20px;">


    <div class="container-fluid">
                        
                           
        <h3>Información general</h3>
    
    <!-- /.col -->

<!-- /.row -->
</div>
<!-- /.container-fluid -->


    <div class="container">
        <h3 class="m-0">Información Categorias</h3>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="margin-top: 20px;">
            Registrar Nueva Categoria
        </button>

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Formulario de Registro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre categoria</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nombre categoria">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Descripción</label>
                                    <textarea class="form-control" rows="3" placeholder="Descripción"></textarea>
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Buscar Imagen</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->



                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <!-- /.col -->

<!-- /.container-fluid -->

<!-- /.content-header -->


</div>

                    
    
                <!-- Main content -->
                <section class="content">
    
                </section>
                <!-- /.content -->
            



            <!-- Main content -->
            <section class="content" style="text-align:bottom;">
                <div class="container-fluid">
                <br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br>
                    <!-- Small boxes (Stat box) -->
                    <div class="container" style="text-align:rigth;">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?> <br>
        </div>
                </div>
        </div>

        




    <?= $this->Html->script([
        'plugins/jquery/jquery.min',
        'plugins/jquery-ui/jquery-ui.min',
        'plugins/bootstrap/js/bootstrap.bundle.min',
        'plugins/chart.js/Chart.min',
        'plugins/sparklines/sparkline',
        'plugins/jqvmap/jquery.vmap.min',
        'plugins/jqvmap/maps/jquery.vmap.usa',
        'plugins/jquery-knob/jquery.knob.min',
        'plugins/moment/moment.min',
        'plugins/daterangepicker/daterangepicker',
        'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min',
        'plugins/summernote/summernote-bs4.min',
        'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min',
        'adminlte',
        'demo',
        'pages/dashboard',
        ]) ?>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

</body>

</html>
