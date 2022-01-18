<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<br>
<div class="column"></div>
<div class="row" style="margin-left: 80px;">
<aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
</div>
<div class="row" style="margin-left: 80px;">
   <br>
    <div class="column-responsive column-80">
        <div class="categorias view content">
            <table><br>
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
        </div>
    </div>
</div>
