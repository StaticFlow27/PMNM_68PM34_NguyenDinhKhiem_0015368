<?php
require_once '../app/core/DB.php';

class sinhvienModel {
    protected $conn;

    public function __construct() {
        $this->conn = ConnectDB::Connect();
    }

    public function getAll(){
        $query = "SELECT * FROM tbl_sinhviens";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($hoten, $mssv, $gioitinh){
        $query = "INSERT INTO tbl_sinhviens(hoten, mssv, gioitinh) VALUES(:hoten, :mssv, :gioitinh)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':hoten', $hoten);
        $stmt->bindParam(':mssv', $mssv);
        $stmt->bindParam(':gioitinh', $gioitinh);
        return $stmt->execute();
    }

    public function paging ($limit = 5, $offset = 0, $search = ""){
        $query = "SELECT * FROM tbl_sinhviens LIMIT :limit OFFSET :offset";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //tinh tong so ban ghi
        $selectAllQuery = $this->conn->query("SELECT COUNT(*) FROM tbl_sinhviens");
        $totalRecord = $selectAllQuery->fetchColumn();

        $totalPage = ceil(num: $totalRecord / $limit);

        return ['sinhviens' => $result, 'totalPage' => $totalPage];
    }

    public function getId($id){
        $query = "SELECT * FROM tbl_sinhviens WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $hoten, $mssv, $gioitinh){
        $query = "UPDATE tbl_sinhviens SET hoten = :hoten, mssv = :mssv, gioitinh = :gioitinh WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':hoten', $hoten);
        $stmt->bindParam(':mssv', $mssv);
        $stmt->bindParam(':gioitinh', $gioitinh);
        return $stmt->execute();
    }
    

}
?>