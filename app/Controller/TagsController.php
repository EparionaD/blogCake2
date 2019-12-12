<?php
    class TagsController extends AppController{
        public function index(){
            $this->Tag->recursive=0;
            $this->set('categorias',$this->Paginate());
        }
        public function agregar(){
            if($this->request->is('post')){
                if($this->Tag->save($this->request->data)){
                    $this->Session->setFlash('Categoria guardada');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
    }
?>