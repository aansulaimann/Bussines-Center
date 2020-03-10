<?php

class BC_Controller {
    // call view
    public function view( $view, $data = [] )
    {
        require_once("../app/views/". $view . ".php");
    }

    // call model
    public function model( $model )
    {
        require_once("../app/model/". $model . ".php");
        return new $model;
    }
}