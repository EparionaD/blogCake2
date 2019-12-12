<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Noticias</title>
</head>
<body>
    <h1>Agregar noticias</h1>
    <?php
        echo $this->Form->create('Tiding');
        echo $this->Form->input('titulo');
        echo $this->Form->input('descripcion');
        echo $this->Form->input('author_id');
        echo $this->Form->input('tag_id');
        echo $this->Form->end('Guardar noticia');
    ?>
</body>
</html>