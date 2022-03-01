<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Proveedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Proveedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedor view content">
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($proveedor->Nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido') ?></th>
                    <td><?= h($proveedor->Apellido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dni') ?></th>
                    <td><?= $this->Number->format($proveedor->Dni) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($proveedor->Direccion) ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= $this->Number->format($proveedor->Telefono) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
