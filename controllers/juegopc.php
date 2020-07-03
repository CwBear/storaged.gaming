<?php

class JuegoPC extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('juegopc/index');
    }
}
?>