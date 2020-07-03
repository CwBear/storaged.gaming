<?php

class Fallo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la Solicitud o la Pagina no Existe";
        $this->view->render('error/index');
    }
}
?>