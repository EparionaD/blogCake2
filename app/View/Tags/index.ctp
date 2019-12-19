<main class="container my-5" style="height:500px;">
    <div class="row my-3">
        <div class="col d-flex justify-content-between">
            <h1>Lista de Categorías</h1>
            <div>
                <?php 
                    echo $this->Html->link('Agregar categoría','agregar', array('class'=>'btn btn-warning text-white','role'=>'button'));
                ?>
            </div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col"><?php echo $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Descripción') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($categorias as $value){
                    ?>
                    <tr>
                        <td><?php echo $value['Tag']['id']; ?></td>
                        <td><?php echo $value['Tag']['nombre']; ?></td>
                        <td><?php echo $value['Tag']['descripcion']; ?></td>
                        <td>
                            <?php echo $this->Html->link('Editar',array('action'=>'editar',$value['Tag']['id'])); ?>
                            &nbsp;
                            <?php echo $this->Form->postLink('Eliminar',
                                array('action'=>'borrar',$value['Tag']['id']),
                                array('confirm'=>'Realmente deseas eliminar?'),
                            ); ?>
                        </td>
                    </tr>
                <?php
                }
            ?>
        </tbody>
    </table>
</main>