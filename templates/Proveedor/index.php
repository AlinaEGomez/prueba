<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor[]|\Cake\Collection\CollectionInterface $proveedor
 */
?>
<div class="proveedor index content">
   
    <h3><?= __('PROVEEDOR') ?></h3>
       <div class="container-fluid">
        <div class="row">
      <div class="col-sm-12"> 
        <table class="table table-striped "border=1>
            <thead>
                <lu>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Apellido') ?></th>
                    <th><?= $this->Paginator->sort('Dni') ?></th>
                    <th><?= $this->Paginator->sort('Direccion') ?></th>
                    <th><?= $this->Paginator->sort('Telefono') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </lu>
            </thead>
            <tbody>
                <?php foreach ($proveedor as $proveedor): ?>
                <tr>
                    <td><?= h($proveedor->Nombre) ?></td>
                    <td><?= h($proveedor->Apellido) ?></td>
                    <td><?= $this->Number->format($proveedor->Dni) ?></td>
                    <td><?= h($proveedor->Direccion) ?></td>
                    <td><?= $this->Number->format($proveedor->Telefono) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $proveedor->Id],['class'=>'btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $proveedor->Id],["class"=>"btn-sm btn-success"]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $proveedor->Id] ,['class'=>'btn-sm btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $proveedor->Id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
         <?= $this->Html->link(__('Nuevo Proveedor'), ['action' => 'add'], ['class' => 'btn btn-sm btn-primary']) ?>
    </div>
</div>
</div>
   
</div>
