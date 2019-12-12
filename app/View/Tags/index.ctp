<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
</head>
<body>
    <h1>Lista de las categorias</h1>

    <div>
        <?php echo $this->Html->link('Agregar categorias', array('action' => 'agregar')); ?>
    </div>

    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('id') ?></th>
            <th><?php echo $this->Paginator->sort('nombre') ?></th>
            <th><?php echo $this->Paginator->sort('descripcion') ?></th>
        </tr>
        <?php
            foreach($categorias as $value){
                ?>
                <tr>
                    <td><?php echo $value['Tag']['id'] ?></td>
                    <td><?php echo $value['Tag']['nombre'] ?></td>
                    <td><?php echo $value['Tag']['descripcion'] ?></td>
                </tr>
            <?php
            }
        ?>
    </table>
</body>
</html>