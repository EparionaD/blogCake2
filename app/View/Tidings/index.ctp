<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
</head>
<body>
    <h1>Lista de las noticias</h1>

    <div>
        <?php echo $this->Html->link('Agregar noticia', array('action' => 'agregar')); ?>
    </div>
    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('id') ?></th>
            <th><?php echo $this->Paginator->sort('titulo') ?></th>
            <th><?php echo $this->Paginator->sort('descripcion') ?></th>
            <th><?php echo $this->Paginator->sort('autor') ?></th>
            <th><?php echo $this->Paginator->sort('categoria') ?></th>
        </tr>
        <?php
            foreach($noticias as $value){
                $nautor = $value['Author']['nombre'];
                $ncategoria = $value['Tag']['nombre'];
                ?>
                <tr>
                    <td><?php echo $value['Tiding']['id'] ?></td>
                    <td><?php echo $value['Tiding']['titulo'] ?></td>
                    <td><?php echo $value['Tiding']['descripcion'] ?></td>
                    <td><?php echo $value['Author']['nombre'] ?></td>
                    <td><?php echo $value['Tag']['nombre'] ?></td>
                </tr>
            <?php
            }
        ?>
    </table>
</body>
</html>