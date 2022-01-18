<pre>
<?php
    print_r($categoria);
?>
</pre>


<!-- Content Header (Page header) -->
<div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo $categoria['nombre'] ?></h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                <li class="breadcrumb-item active">Categorias</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <?php foreach($categoria['productos'] as $producto): ?>
                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="card card-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-warning">
                                    <h3 class="widget-user-username"><?php echo $producto['nombre'] ?></h3>
                                    <h5 class="widget-user-desc">Samsung</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="dist/img/lavadoras.png" alt="User Avatar">
                                </div>
                                <div class="card-footer p-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                            Precio <span class="float-right badge bg-primary"><?php echo $producto['precio'] ?> Bs.</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                          Tasks <span class="float-right badge bg-info">5</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                          Completed Projects <span class="float-right badge bg-success">12</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                          Followers <span class="float-right badge bg-danger">842</span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorias view content">
            <h3><?= h($categoria->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($categoria->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($categoria->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($categoria->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Productos') ?></h4>
                <?php if (!empty($categoria->productos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Precio') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Categoria Id') ?></th>
                            <th><?= __('Marca Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($categoria->productos as $productos) : ?>
                        <tr>
                            <td><?= h($productos->id) ?></td>
                            <td><?= h($productos->nombre) ?></td>
                            <td><?= h($productos->codigo) ?></td>
                            <td><?= h($productos->precio) ?></td>
                            <td><?= h($productos->descripcion) ?></td>
                            <td><?= h($productos->categoria_id) ?></td>
                            <td><?= h($productos->marca_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $productos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $productos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $productos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
