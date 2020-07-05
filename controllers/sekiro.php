<?php

class Sekiro extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('sekiro/index');
    }
}
?>