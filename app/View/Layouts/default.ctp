<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
	<?php echo $this->Html->charset(); ?>
    <link rel="stylesheet" href="bootstrap.css">
	<?php
        echo $this->Html->css(array('bootstrap'));
        echo $this->Html->script(array('jquery-3.4.1.min','bootstrap'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="#">Blog CakePhp</a>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'display', 'home'),array('class'=>'nav-link')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo $this->Html->link('Noticias', array('controller'=>'tidings','action'=>'index'),array('class'=>'nav-link')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo $this->Html->link('Autores', array('controller'=>'authors','action'=>'index'),array('class'=>'nav-link')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo $this->Html->link('Categorías', array('controller'=>'tags','action'=>'index'),array('class'=>'nav-link')); ?>
                            </li>
                        </ul>
                    </div>
                  </nav>
            </div>
        </div>
    </header>
    <main>
		<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>
    </main>
    <footer class="container-fluid bg-dark text-white text-muted d-flex justify-content-center py-2">
        <div class="row">
            <div class="col">
                <p class="my-0">&copy; 2019 - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>

    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>
