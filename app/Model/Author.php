<?php
    class Author extends AppModel{
        public $displayField = 'nombre';
        public $hasMany = array(
            'Tiding' => array(
                'className' => 'Tiding',
                'foreignKey' => 'author_id',
                'dependent' => 'true',
            )
        );
    }
?>