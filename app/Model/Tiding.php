<?php
    class Tiding extends AppModel{
        public $displayField = 'titulo';
        public $belongsTo = array(
            'Author' => array(
                'className' => 'Author',
                'foreignKey' => 'author_id',
            ),
            'Tag' => array(
                'className' => 'Tag',
                'foreignKey' => 'tag_id',
            )
        );
    }
?>