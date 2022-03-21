<?php
     class PersonasController extends AppController{
      public function index($pages = 1){
       View::template('principal');
       $this->listPersonas = (new Personas)->getPersonas($pages);
       }
       public function registro(){
        View::template('principal');
       }
       public function borrar($id){
          View::select(NULL);
       }
       public function editar($id){
          View::template('principal');
       }
    }
?>