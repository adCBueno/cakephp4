<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<div class="row" style="margin-left: 20px;"><br>
<div class="column-responsive column-80"><br>
        <div class="categorias view content">
            <table>
                
                  <h2><?= h($categoria->nombre) ?></h2>  
                
               
                   <?= h($categoria->descripcion) ?>
                
                
            </table>
            
        </div>
    </div>
    <aside class="column" style="padding-left: 50px;"><br>
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?><br>
        </div>
    </aside>
    
</div>






<?php if(($categoria['productos'] !=null)): ?>


<div class="container-fluid"> 


    <div class="row">
    <?php foreach($categoria['productos'] as $producto): ?>

        <div class="col-md-4">
                
            <!-- Box Comment -->
            <div class="card card-widget" >
                    <div class="card-header">
                        <div class="user-block">
                            <img  style="width: 40%; padding-right: 15px;" src="https://www.bgs-associes.com/wp-content/uploads/2019/07/samsung-logo-png-samsung-logo-png-2104.png" alt="User Image">
                            
                            <span class="username"><a href="producto-televisor.html">Televisión Samsung</a></span>
                            
                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">
                            
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                            
                        </div>
                    <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <img class="img-fluid pad" src="<?php echo $producto['imagen'] ?>" alt="Photo">
                        <br><br>
                        <p><?php echo $producto['nombre'] ?></p>
                        <ul>
                        <li><?php echo $producto['precio'] ?> Bs.</li>
                        <li><?php echo $producto['descripcion'] ?></li>
                        </ul>
                        <div style="text-align: center;">                                
                            <button type="button" class="btn btn-success btn-sm">Agregar a carrito</button>
                            <button type="button" class="btn btn-primary btn-sm">Ver más</button>
                        </div>
                    </div> 
                
            </div>
        </div>

    <?php endforeach; ?>
    </div>


</div>


<?php else: ?>

    <h4 style="padding-left: 20px;">No existen productos en esta Categoria</h4>

    <?php endif; ?>





   