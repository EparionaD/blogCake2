<?php
    $noticiasInicio = $this->requestAction('/tidings/index');
    foreach($noticiasInicio as $value){
        ?>
        <div class="col-4">
            <div class="card border-dark mb-3">
                <div class="card-header"><?php echo $value['Tag']['nombre'] ?></div>
                <div class="card-body text-dark">
                    <h5 class="card-title"><?php echo $value['Tiding']['titulo'] ?></h5>
                    <p class="card-text"><?php echo $value['Tiding']['descripcion'] ?></p>
                </div>
            </div>
        </div>
    <?php
    }
?>