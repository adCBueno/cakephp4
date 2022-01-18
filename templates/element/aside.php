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
                       <li class="nav-item nav-link">
                       
                        <?php echo $this->Html->link('Inicio',['controller'=> 'categorias', 'action'=> 'index']); ?>
                                           
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
                        <a href=" <?php echo $this->Url->build(['action' => 'view', h($categoria->id)]); ?> " class="nav-link">
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