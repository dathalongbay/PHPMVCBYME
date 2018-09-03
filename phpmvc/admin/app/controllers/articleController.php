<?php
class articleController extends appController{

    public function __construct()
    {

    }

    /**
     * phuong thuc se su dung hien thi tat ca cac bai viet
     */
    public function indexAction() {

        $articleModel = new articleModel();
        $articles = $articleModel->getRows();

        return $this->view('article', 'index', array('articles' => $articles));
    }

    /**
     * phuong thuc sua bai viet
     */
    public function editAction() {

        $id = isset($_GET['id']) ? $_GET['id'] : 0;

        $articleModel = new articleModel();
        $article = $articleModel->getRow($id);

        return $this->view('article', 'edit', array('article' => $article));
    }

    public function addAction() {


        $articleModel = new articleModel();

        return $this->view('article', 'add', array());
    }

    public function storeAction() {
        $data = $_POST;

        $articleModel = new articleModel();
        $articleModel->store($data);

        if ($data['id'] > 0) {
            $newURL = ADMIN_URL . 'index.php?controller=article&action=edit&id='.$data['id'];
        } else {
            $newURL = ADMIN_URL . 'index.php?controller=article&action=edit&id='.$articleModel->getInsertLastId();
        }



        header("Location: $newURL");
        die();
    }

    /**
     * xoa 1 bai viet
     */
    public function deleteAction(){

        $id = $_GET['id'];
        $articleModel = new articleModel();

        if ($id > 0) {
            $articleModel->remove($id);
        }

        $articles = $articleModel->getRows();

        return $this->view('article', 'index', array('articles' => $articles));
    }

    /**
     * xem 1 bai viet
     */
    public function viewAction() {

    }
}