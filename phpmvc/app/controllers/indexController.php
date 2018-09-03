<?php
class indexController {

    public function __construct()
    {
    }

    public function indexAction() {

        $name = "PHP MVC";
        return view('index', 'index', array('name' => $name));
    }
}