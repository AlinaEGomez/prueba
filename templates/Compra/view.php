<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compra $compra
 */
?>
<div class="container">
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar Compra'), ['action' => 'edit', $compra->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Compra'), ['action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete ?', $compra->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista Compra'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nueva Compra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="compra view content">
    
            <table>
                <div class="text">
                   <!-- <strong><?= __('Nombre') ?></strong>
                          <blockquote>
                            <?= $this->Text->autoParagraph(h($compra->Nombre)); ?>
                          </blockquote>-->
               </div>
                <tr>
                    <th><?=__('Nombre')?></th>
                    <td><?=h($compra->Nombre)?></td>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($compra->Correo) ?></td>
                </tr>

                <tr>
                    <th><?= __('Dni') ?></th>
                    <td><?= $this->Number->format($compra->Dni) ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($compra->Fecha) ?></td>
                </tr>
            </table>
            
        </div>
    </div>
</div>
</div>
