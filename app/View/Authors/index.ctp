<main class="container my-5" style="height:500px;">
    <div class="row my-3">
        <div class="col d-flex justify-content-between">
            <h1>Lista de Autores</h1>
            <div>
                <?php 
                    //echo $this->Html->link('Agregar autor', array('action'=>'agregar',));
                    echo $this->Html->link('Agregar autor','agregar', array('class'=>'btn btn-warning text-white','role'=>'button'));
                ?>
            </div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col"><?php echo $this->Paginator->sort('id') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('email') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($editores as $value){
                    ?>
                    <tr>
                        <td><?php echo $value['Author']['id']; ?></td>
                        <td><?php echo $value['Author']['nombre']; ?></td>
                        <td><?php echo $value['Author']['apellido']; ?></td>
                        <td><?php echo $value['Author']['email']; ?></td>
                        <td>
                            <?php echo $this->Html->link('Editar',array('action'=>'editar',$value['Author']['id'])); ?>
                            &nbsp;
                            <?php echo $this->Form->postLink('Eliminar',
                                array('action'=>'borrar',$value['Author']['id']),
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