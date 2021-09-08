<?php
class SinhVienModel extends db{
    public function getSVien(){
        return "Nguyen Van A";
    }
    public function getSV(){
        $query="select * from sinhvien";
        return mysqli_query($this->conn,$query);
    }

}
?>