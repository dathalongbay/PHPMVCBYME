<?php
class indexController {

    public function __construct()
    {
    }

    public function indexAction() {


        $articleModel = new articleModel();
        $record = $articleModel->getRows();

        echo "<pre>";
        print_r($articleModel);
        echo "</pre>";

        echo "<pre>";
        print_r($record);
        echo "</pre>";
        //$userModel::getUsers();
        //$userModel::getSingleUser();

echo __METHOD__;
exit;

        $name = "PHP MVC";
        return view('index', 'index', array('name' => $name));
    }
}