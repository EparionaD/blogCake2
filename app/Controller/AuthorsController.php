<?php
    class AuthorsController extends AppController{
        public $helpers = array('Html','Form');
        public $components = array('Session');
        
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
        public function editar($id=null){
            $this->Author->id=$id;
            if($this->request->is('get')){
                $this->request->data = $this->Author->read();
            }else if($this->Author->save($this->request->data)){
                $this->Session->setFlash('Autor '.$this->request->data['Author']['nombre'].' editado');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('Autor no guardado');
            }
        }
        public function borrar($id=null){
            if($this->request->is('get')){
                echo 'Prueba';
            }else if($this->Author->delete($id)){
                $this->Session->setFlash('Autor eliminado');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
?>