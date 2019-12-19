<div id="<?php echo $key; ?>Message" class="<?php echo !empty($params['class']) ? $params['class'] : 'alert alert-danger'; ?>">
    <?php echo $message; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
