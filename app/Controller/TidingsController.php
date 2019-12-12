<?php
    class TidingsController extends AppController{
        public function index(){
            $this->Tiding->recursive=0;
            $this->set('noticias',$this->Paginate());
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
    }
?>