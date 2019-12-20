<?php
    class TidingsController extends AppController{
        public $helpers = array('Html','Form');
        public $components = array('Session');

        public function index(){

            $this->Tiding->recursive=0;
            $this->set('noticias',$this->Paginate());
            $noticiasInicio = $this->Paginate();

            return $noticiasInicio;
            $authors = $this->Tiding->Author->find('list');
            $tags = $this->Tiding->Tag->find('list');
            $this->set(compact('authors','tags'));
        }
        public function agregar(){
            if($this->request->is('post')){
                if($this->Tiding->save($this->request->data)){
                    $this->Session->setFlash('Noticia guardada');
                    $this->redirect(array('action'=>'index'));
                }
            }
            $authors = $this->Tiding->Author->find('list');
            $tags = $this->Tiding->Tag->find('list');
            $this->set(compact('authors','tags'));
        }
        public function editar($id=null){
            $this->Tiding->id=$id;
            if($this->request->is('get')){
                $this->request->data = $this->Tiding->read();
            }else if($this->Tiding->save($this->request->data)){
                $this->Session->setFlash('Noticia: " '.$this->request->data['Tiding']['titulo'].'" editada');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('Noticia no guardado');
            }
            $authors = $this->Tiding->Author->find('list');
            $tags = $this->Tiding->Tag->find('list');
            $this->set(compact('authors','tags'));
        }
        public function borrar($id=null){
            if($this->request->is('get')){
                echo 'Prueba';
            }else if($this->Tiding->delete($id)){
                $this->Session->setFlash('Noticia eliminada');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
?>