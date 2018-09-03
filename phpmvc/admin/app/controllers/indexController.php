<?php
class indexController {

    public function __construct()
    {
        /**
         *
         */
    }

    public function indexAction() {

        /**
         * Check session login
         */


        if (!isset($_SESSION['login_user']) || empty($_SESSION['login_user'])) {
            $loginURL = ADMIN_URL . 'index.php?controller=login&action=index';

            header("Location: $loginURL");
            die;
        }

        $name = "PHP MVC 1";
        return view('index', 'index', array('name' => $name));
    }
}