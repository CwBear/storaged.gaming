<?php

class JuegoPS4 extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('juegops4/index');
    }
}
?>