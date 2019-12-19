<main class="container my-5" style="height:500px;">
    <div class="row my-3">
        <div class="col d-flex justify-content-between">
            <h1>Lista de Noticias</h1>
            <div>
                <?php 
                    echo $this->Html->link('Agregar noticia','agregar', array('class'=>'btn btn-warning text-white','role'=>'button'));
                ?>
            </div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col"><?php echo $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Titulo') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Descripción') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Autor') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Categoría') ?></th>
                <th scope="col"><?php echo $this->Paginator->sort('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($noticias as $value){
                    ?>
                    <tr>
                        <td><?php echo $value['Tiding']['id']; ?></td>
                        <td><?php echo $value['Tiding']['titulo']; ?></td>
                        <td><?php echo $value['Tiding']['descripcion']; ?></td>
                        <td><?php echo $value['Author']['nombre']; ?></td>
                        <td><?php echo $value['Tag']['nombre']; ?></td>
                        <td>
                            <?php echo $this->Html->link('Editar',array('action'=>'editar',$value['Tiding']['id'])); ?>
                            &nbsp;
                            <?php echo $this->Form->postLink('Eliminar',
                                array('action'=>'borrar',$value['Tiding']['id']),
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