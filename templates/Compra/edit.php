<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compra $compra
 */
?>
<div class="page-header">
 <div class="column-responsive">
    <aside> 
    <div class="col-sm-12">
        
    </div>
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compra->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id), 'class' => 'side-nav-item ,btn bnt-sm btn-danger']
            ) ?>
            <?= $this->Html->link(__('Lista de Compra'), ['action' => 'index'], ['class' => 'side-nav-item ,btn btn-sm btn-primary']) ?>
        </div>

    </aside>
    <div class="column-responsive column-80">
        <div class="compra form content">
            <?= $this->Form->create($compra) ?>
            <fieldset>
                <legend><?= __('Edit Compra') ?></legend>
                <?php
                    echo $this->Form->control('Fecha');
                    echo $this->Form->control('Nombre');
                    echo $this->Form->control('Dni');
                    echo $this->Form->control('Correo');
                ?>
            </fieldset>
        <?= $this->Form->button(__('Submit') ,['class'=>'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

</div>
