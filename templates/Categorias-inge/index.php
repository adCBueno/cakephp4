

                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Información general</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Información Categorias</h1>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
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
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

            </section>
            <!-- /.content -->

        



<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria[]|\Cake\Collection\CollectionInterface $categorias
 */
?>
<div class="categorias index content">
    <?= $this->Html->link(__('Registrar Categoria'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nombre Categoria') ?></th>
                    <th><?= $this->Paginator->sort('descripción') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?= h($categoria->nombre) ?></td>
                    <td><?= h($categoria->descripcion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $categoria->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoria->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
