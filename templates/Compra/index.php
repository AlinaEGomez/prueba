<?php


/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compra[]|\Cake\Collection\CollectionInterface $compra
 */
?>
<div class="page-header">
    <h1><?php echo __('COMPRA');?></h1>
</div>
<div class="row">
      <div class="col-sm-12"> 
        <table class="table table-striped "border=1>
            <thead>
                <tr>
                    
                    <th><?= $this->Paginator->sort('Fecha') ?></th>
                    <th><?= $this->Paginator->sort('Dni') ?></th>
                    <th><?= $this->Paginator->sort('Nombre')?></th>
                    <th><?= $this->Paginator->sort('Correo')?></th>
                    <th class="action"><?= __('Acción') ?></th>
                </tr>
             </thead>
            <tbody>
                <?php foreach ($compra as $compra): ?>


                <tr>
                    <td><?= h($compra->Fecha) ?></td>
                    <td><?= $this->Number->format($compra->Dni) ?></td>
                    <td><?= h($compra->Nombre)?></td> 
                    <td><?= h($compra->Correo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $compra->id],['class'=>'btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $compra->id],["class"=>"btn-sm btn-success"]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $compra->id],['class'=>'btn-sm btn-danger','confirm' => __('Are you sure you want to delete #{0} ?', $compra->id)]) ?>
                        
                    
                               
                        </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->Html->link(__('Agregar Compra'), ['action' => 'add'],["class"=>"btn btn-sm btn-primary"]) ?>
    </div>
  </div>
 
    

