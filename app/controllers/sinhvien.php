<?php
//require_once '../app/models/sinhvienModel.php';
require_once '../app/core/Controller.php';

class sinhvien extends Controller{
    public function index($limit = 5, $offset = 0, $search = ""){
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

    public function edit($id){
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhvien = $sinhvienModel->getId($id);
        $this->view('sinhvien/edit', ['sinhvien' => $sinhvien]);
    }

    public function update($id) {
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
            $hoten = $_POST['hoten'] ??'';
            $gioitinh = $_POST['gioitinh'] ??'';
            $mssv = $_POST['mssv'] ??'';
            $sinhvienModel = $this->model('sinhvienModel');
            $result = $sinhvienModel->update($id, $hoten, $gioitinh, $mssv);
            if($result){
                echo "Cập nhật thành công";
            }else{
                echo "Cập nhật thất bại";
            }
        }
    }

    public function delete($id) {
        $sinhvienModel = $this->model('sinhvienModel');
        $result = $sinhvienModel->delete($id);
        if($result){
            echo 'Xoa thanh cong';
        }else{
            echo 'Xoa that bai';
        }
    }
    
    public function create() {
        require_once '../app/views/sinhvien/create.php';
    }
    public function login() {
        require_once '../app/views/sinhvien/login.php';
    }
}
?>