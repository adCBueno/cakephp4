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
        'cake'
        ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

   
    <?php echo $this->element('navegacion'); ?>
    <?= $this->element('aside'); ?>

        
        <div class="content-wrapper">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?> 

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
