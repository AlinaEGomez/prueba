<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalle[]|\Cake\Collection\CollectionInterface $detalles
 */
?>
<div class="detalles index content">
    <h3><?= __('DETALLES') ?></h3>
    <div class="row">
        <div class = conteiner-fluid-well>
      <div class="col-sm-12"> 
        <table class="table table-striped "border=1>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?=$this->Paginator->sort('producto')?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalles as $detalle): ?>
                <tr>
                    <td><?= $this->Number->format($detalle->cantidad) ?></td>
                    <td><?= $this->Number->format($detalle->precio) ?></td>
                    <td><?= h($detalle->producto)?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $detalle->id],['class'=>'btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $detalle->id],["class"=>"btn-sm btn-success"]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $detalle->id],['class'=>'btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $detalle->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->Html->link(__('Nuevo Detalle'), ['action' => 'add'], ['class' => 'btn btn-sm btn-primary']) ?>
    
    </div>
</div>
</div>
</div>