<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="container">
<div class="row">
    <aside class="col-md-12">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $proveedor->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->Id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista Proveedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-80">
        <div class="proveedor form content-center">
            <?= $this->Form->create($proveedor) ?>
            <fieldset>
                <legend><?= __('Editar Proveedor') ?></legend>
                <?php
                    echo $this->Form->control ('Nombre');
                    echo $this->Form->control ('Apellido');
                    echo $this->Form->control ('Dni');
                    echo $this->Form->control ('Direccion');
                    echo $this->Form->control ('Telefono');
                ?>
            </fieldset>
           
            <?= $this->Form->button(__('Actualizar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
