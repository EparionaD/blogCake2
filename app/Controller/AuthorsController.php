<?php
    class AuthorsController extends AppController{
        public function index(){
            $this->Author->recursive=0;
            $this->set('editores',$this->Paginate());
        }
        public function agregar(){
            if($this->request->is('post')){
                if($this->Author->save($this->request->data)){
                    $this->Session->setFlash('Editor guardado');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
    }
?>