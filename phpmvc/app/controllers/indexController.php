<?php
class indexController {

    public function __construct()
    {
    }

    public function indexAction() {


        $articleModel = new articleModel();

        echo "<pre>";
        print_r($articleModel);
        echo "</pre>";
        //$userModel::getUsers();
        //$userModel::getSingleUser();

echo __METHOD__;
exit;

        $name = "PHP MVC";
        return view('index', array('name' => $name));
    }
}