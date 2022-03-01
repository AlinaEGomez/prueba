<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalle $detalle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detalle'), ['action' => 'edit', $detalle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detalle'), ['action' => 'delete', $detalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detalle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="detalles view content">
            <table>
                <tr>
                    <th><?= __('Cantidad:') ?></th>
                    <td><?= $this->Number->format($detalle->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio: $') ?></th>
                    <td><?= $this->Number->format($detalle->precio) ?></td>
                </tr>
           
                <tr>
                    <th><?=__('Producto:')?></th>
                    <td><?=h($detalle->producto)?></td>
                <tr>
               </table>
    
        </div>
    </div>
</div>
