<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca[]|\Cake\Collection\CollectionInterface $marcas
 */
?>
<div class="marcas index content">
    <?= $this->Html->link(__('New Marca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marcas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marcas as $marca): ?>
                <tr>
                    <td><?= $this->Number->format($marca->id) ?></td>
                    <td><?= h($marca->nombre) ?></td>
                    <td><?= h($marca->descripcion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $marca->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marca->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->id)]) ?>
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
