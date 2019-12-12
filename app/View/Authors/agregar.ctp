<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar editor</title>
</head>
<body>
    <h1>Agregar un editor nuevo</h1>
    <?php
        echo $this->Form->create('Author');
        echo $this->Form->input('nombre');
        echo $this->Form->input('apellido');
        echo $this->Form->input('email');
        echo $this->Form->end('Guardar editor');
    ?>
</body>
</html>