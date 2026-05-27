<?php
//require_once '../app/models/sinhvienModel.php';
require_once '../app/core/Controller.php';
class sinhvien extends Controller{
    public function index() {
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhviens = $sinhvienModel->getAll();

        //tra ve view
        //require_once '../app/views/sinhvien/index.php';
        $this->view("sinhvien/index", ['sinhviens' => $sinhviens]);
    }



    public function create() {
        echo "Day la trang tao moi sinh vien";
        require_once '../app/views/sinhvien/create.php';
    }
    public function login() {
        echo "Day la trang dang nhap";
        require_once '../app/views/sinhvien/login.php';
    }


}

?>