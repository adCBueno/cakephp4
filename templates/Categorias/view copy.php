

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="categorias view content">
       
            <div class="card-body">
            <h3><?= h($categoria->id) ?></h3>
                               <br><br>
                               <th><?= __('Nombre') ?></th>
                    <td><?= h($categoria->nombre) ?></td>
                              <ul>
                                  <li><?= h($categoria->descripcion) ?></li>                    
                                </ul>
                                <div style="text-align: center;">                                
                                    <button type="button" class="btn btn-success btn-sm">Agregar a carrito</button>
                                    <button type="button" class="btn btn-primary btn-sm">Ver más</button>
                                </div>
                            </div>

        </div>
    </div>
</div>

