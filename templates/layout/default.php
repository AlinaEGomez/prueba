<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Alina Gomez';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
       
        <?= $cakeDescription ?>
        <?php $this->fetch('title'); ?>
    </title>
    <?= $this->Html->meta('icon');?> 
    <?=$this->Html->css(array('bootstrap.min','bootstrap-theme.min','miStyle.css'));?>
         <?= $this->Html->script(array('jquery.min','bootstrap.min','funciones.js'));?>


    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
   </head>



    <body>
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <div class="container-fluid">
                    <a class="navbar-brand" href="#jumbotron">Inicio</a>
                    <style text-decoration: none></style>
                       <button class="navbar-toggler" type="btn btn-sm btn primary" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"  aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                      </button>
                              <div class="collapse navbar-collapse" id="navbarNav">
                                 <ul class="navbar-nav"></ul>
                                     <lu >
                                    
                                         <a class="nav-item"></a>
                                         <?php echo $this->Html->link('Proveedor',array('controller'=>'proveedor','action'=>'index'))?>
                                         <a class="nav-item"></a>
                                         <?php echo $this->Html->link('Compras',array('controller'=>'Compra','action'=>'index'))?>
                      
                                         <a class="nav-item"></a>
                                         <?php echo $this->Html->link('Detalles',array('controller'=>'detalles','action'=>'index'))?>
                                     </lu>
                
                          </div>
                          </div>
                      </nav>


                     <main> 
                       <div class="container theme-showcase"role ="main">
                                            <div id="container">
                                            <div id="content">
                                            <?= $this->Flash->render() ?>
                             <?= $this->fetch('content') ?>
                                </div>
                                    </div>

             </div>
     </main>
  </body>
  <footer></footer>
</html>


