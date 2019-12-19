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
        public function editar($id=null){
            $this->Tag->id=$id;
            if($this->request->is('get')){
                $this->request->data = $this->Tag->read();
            }else if($this->Tag->save($this->request->data)){
                $this->Session->setFlash('Categoría: " '.$this->request->data['Tag']['nombre'].'" editada');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('Categoría no guardada');
            }
        }
        public function borrar($id=null){
            if($this->request->is('get')){
                echo 'Prueba';
            }else if($this->Tag->delete($id)){
                $this->Session->setFlash('Categoría eliminada');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
?>