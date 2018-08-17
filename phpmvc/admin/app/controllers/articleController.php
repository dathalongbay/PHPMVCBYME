<?php
class articleController {

    public function __construct()
    {

    }

    /**
     * phuong thuc se su dung hien thi tat ca cac bai viet
     */
    public function indexAction() {

        $articleModel = new articleModel();
        $articles = $articleModel->getRows();

        return view('article', 'index', array('articles' => $articles));
    }

    /**
     * phuong thuc sua bai viet
     */
    public function editAction() {

        $name = "PHP Edit";
        return view('article', 'edit', array('name' => $name));
    }

    /**
     * xoa 1 bai viet
     */
    public function deleteAction(){
        $name = "PHP Edit";
        return view('index', 'delete', array('name' => $name));
    }

    /**
     * xem 1 bai viet
     */
    public function viewAction() {

    }
}