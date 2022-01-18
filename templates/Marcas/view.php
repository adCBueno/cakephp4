<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Marca'), ['action' => 'edit', $marca->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Marca'), ['action' => 'delete', $marca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Marcas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Marca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marcas view content">
            <h3><?= h($marca->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($marca->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($marca->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($marca->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Productos') ?></h4>
                <?php if (!empty($marca->productos)) : ?>
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
                        <?php foreach ($marca->productos as $productos) : ?>
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
