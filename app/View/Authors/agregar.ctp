<main class="container my-5" style="height:500px;">
    <div class="row my-3">
        <div class="col">
            <h1>Agregar un autor nuevo</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <?php
            $options = array(
                'class'=>'form-control',
                'div'=>array(
                    'class'=>'form-group',
                )
            );
            $options1 = array(
                'class'=>'btn btn-primary',
                'label'=>'Guardar autor',
            );
                echo $this->Form->create('Author');
                echo $this->Form->input('nombre', $options);
                echo $this->Form->input('apellido', $options);
                echo $this->Form->input('email', $options);
                echo $this->Form->end($options1);
            ?>
        </div>
    </div>
</main>