
<div class="row">
    <aside class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Listar Compras'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4"></div>
        <div class="col-md-8 order-md-1">
                <h2>Crear Compra</h2>
        </div>
            <?= $this->Form->create($compra) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('Fecha');
                    echo $this->Form->control('Nombre');
                    echo $this->Form->control('Dni');
                    echo $this->Form->control('Correo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Ingresar'))?> 
                <?= $this->Form->end() ?>
        </div>
</div>
</div>

