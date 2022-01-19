<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria[]|\Cake\Collection\CollectionInterface $categorias
 */
?>
















     
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comercial -- VJRC</title>

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
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   
<div class="wrapper">

 <!-- Content Wrapper. Contains page content -->
       
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
               
<div class="container" >


    <div class="container-fluid">
                        
                           
        <h3>Información general</h3>
    
    <!-- /.col -->

<!-- /.row -->
</div>


<!-- /.container-fluid -->


    <div class="container">
        <h3 class="m-0">Información Categorias</h3>
    </div>



        





        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="margin-top: 20px;">
            Registrar Nueva Categoria
        </button>
<!-- /.FORMULARIO -->
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
                    <?= $this->Form->create($categoria) ?>
                            <div class="card-body">
                                <div class="form-group">                                    
                                    <?php
                                    echo $this->Form->control('nombre', ['label'=>'Nombre de la categoria','class'=>'form-control']);
                                    ?>
                                </div>

                                <div class="form-group">
                                <label for="exampleInputPassword1">Descripción</label>
                                    <?php
                                    echo $this->Form->textarea('descripcion', ['label'=>'Descripción', 'class'=>'form-control']);
                                       
                                    ?>
                                    <?php
                                echo $this->Form->hidden('edicion',['value'=>0]);
                                    ?>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            

                            <div class="card-footer">
                            <?= $this->Form->button(__('Registrar'), ['class'=>'btn btn-primary']) ?>
                            </div>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>

<br>

                    
    
                
            




            
           

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Todas las categorias</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">id</th>
                      <th class="col-md-1">Categoria</th>
                      <th class="col-md-7">Descripción</th>
                      <th class="col-md-1">Acción</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($categorias as $cat): ?>
                    <tr>
                      <td> <?php echo $cat['id']; ?></td>
                      <td> <?php echo $cat['nombre']; ?> </td>
                      <td>
                        <p>  <?php echo $cat['descripcion']; ?>  </p>
                     </td>
                      
                       
                            <td>
                            <?php  echo $this->Html->link('Ver',['action'=>'view',$cat['id']],['class'=>'btn btn-block btn-primary']); ?>
                             
                            </td>

                            <td>
                            <button type="button" class="btn btn-block btn-warning" 
                            data-toggle="modal"
                            data-target="#modal-editar-categoria-<?php echo $cat['id']?>">
                                Editar
                            </button>  

                            <div class="modal fade" id="modal-editar-categoria-<?php echo $cat['id']?>">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Formulario de Edición</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <?= $this->Form->create($categoria) ?>
                                                <div class="card-body">
                                                    <div class="form-group">                                    
                                                        <?php
                                                        echo $this->Form->control('nombre', ['label'=>'Nombre de la categoria',  'value'=>$cat['nombre'] , 'class'=>'form-control']);
                                                        ?>
                                                    </div>

                                                    <div class="form-group">
                                                    <label for="exampleInputPassword1">Descripción</label>
                                                        <?php
                                                        echo $this->Form->textarea('descripcion', ['label'=>'Descripción',  'value'=>$cat['descripcion'] ,'class'=>'form-control']);
                                                     
                                                      ?>
                                                      <?php
                                                         echo $this->Form->hidden('edicion',['value'=>1]);
                                                         echo $this->Form->hidden('id',['value'=>$cat['id']]);
                                                      ?>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>

                                                </div>
                                        <?= $this->Form->end() ?>
                                    </div>

                                 </div>               
                             </div>
          
                             </div>
        


                         
                         
                         
                          
                            </td>

                            <td>
                           <?= $this->Form->postLink(
                               __('Eliminar'),
                               ['action'=>'delete',$cat->id],
                               ['confirm'=>__('¿Desea eliminar la categoria {0}?',$cat->nombre), 'class'=>'btn btn-block btn-danger']
                           )
                           ?>
                            </td>                               
                    </tr>
                    <?php endforeach; ?>      

                  </tbody>

                </table>

              </div>


              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
      </div>
    </section>













    

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>





<br><br>

</body>

</html>
           

























