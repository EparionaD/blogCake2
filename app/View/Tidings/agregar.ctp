<main class="container my-5" style="height:500px;">
    <div class="row my-3">
        <div class="col">
            <h1>Agregar una noticia nueva</h1>
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
                'label'=>'Guardar noticia',
            );
                echo $this->Form->create('Tiding');
                echo $this->Form->input('titulo', $options);
                echo $this->Form->input('descripcion', $options);
                echo $this->Form->input('author_id', $options);
                echo $this->Form->input('tag_id', $options);
                echo $this->Form->end($options1);
            ?>
        </div>
    </div>
</main>