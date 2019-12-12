<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar editor</title>
</head>
<body>
    <h1>Agregar una nueva categoria</h1>

    <?php
        echo $this->Form->create('Tag');
        echo $this->Form->input('nombre');
        echo $this->Form->input('descripcion');
        echo $this->Form->end('Guardar editor');
    ?>
</body>
</html>