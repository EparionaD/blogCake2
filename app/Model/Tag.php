<?php
    class Tag extends AppModel{
        public $displayField = 'nombre';
        public $hasMany = array(
            'Tiding' => array(
                'className' => 'Tiding',
                'foreignKey' => 'tag_id',
            )
        );
    }
?>