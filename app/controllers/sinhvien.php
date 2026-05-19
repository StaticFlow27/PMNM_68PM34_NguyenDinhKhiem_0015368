<?php
class sinhvien{
    public function index() {
        //echo "Day la trang chu sinh vien";
        require_once '../app/views/sinhvien/index.php';
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