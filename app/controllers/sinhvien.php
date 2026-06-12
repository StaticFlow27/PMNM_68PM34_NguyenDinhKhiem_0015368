<?php
//require_once '../app/models/sinhvienModel.php';
require_once '../app/core/Controller.php';

class sinhvien extends Controller{
    public function index($limit = 3, $offset = 0, $search = ""){
        $sinhvienModel = $this->model('sinhvienModel');
        //$sinhviens = $sinhvienModel->getAll();
        $result = $sinhvienModel->paging($limit, $offset,$search);
        $sinhviens = $result['sinhviens'];
        $totalPage = $result['totalPage'];

        //tra ve view
        //require_once '../app/views/sinhvien/index.php';
        $this->view('layout/masterlayout', ['viewname' => 'sinhvien/index', 'sinhviens' => $sinhviens, 'totalPage' => $totalPage, 'title' => 'Danh sach sinh vien']);
    }

    public function store(){
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
            $hoten = $_POST['hoten'] ?? '';
            $mssv = $_POST['mssv'] ?? '';
            $gioitinh = $_POST['gioitinh'] ?? '';
            $sinhvienModel = $this->model('sinhvienModel');
            $result = $sinhvienModel->create($hoten, $mssv, $gioitinh);
            if($result){
                echo 'Them moi thanh cong';
            }else{
                echo 'Them moi that bai';
            }
        }
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