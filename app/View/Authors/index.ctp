<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editores</title>
</head>
<body>
    <h1>Lista de los editores</h1>

    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('id') ?></th>
            <th><?php echo $this->Paginator->sort('nombre') ?></th>
            <th><?php echo $this->Paginator->sort('apellido') ?></th>
            <th><?php echo $this->Paginator->sort('email') ?></th>
        </tr>
        <?php
            foreach($editores as $value){
                ?>
                <tr>
                    <td><?php echo $value['Author']['id'] ?></td>
                    <td><?php echo $value['Author']['nombre'] ?></td>
                    <td><?php echo $value['Author']['apellido'] ?></td>
                    <td><?php echo $value['Author']['email'] ?></td>
                </tr>
            <?php
            }
        ?>
    </table>
</body>
</html>