<?php

class Home extends controller{
    function SayHi(){
        $bangdiem = $this->model("BangDiemModel");
        $teo = $this->model("SinhVienModel");
        echo "Trả ra getSV: ".$teo->getSVien()."<br>";
        echo "Trả ra Bảng Điểm SV: ".$bangdiem->getBangDiem();
        echo "<br>Home-SayHi";
    }
    function Show($a,$b){
        $tongdiem = $this->model("BangDiemModel");
        echo "Tổng điểm trung bình 3 môn của sinh viên $a là :".$tongdiem->tongdiemSV(10,9,8);
        echo "<br>Tổng điểm trung bình 3 môn của sinh viên $b là :".$tongdiem->tongdiemSV(8,7,6);
    }

    function Plus($a,$b){
        $tong = $this->model("BangDiemModel");// = require .../BangDiemModel.php
        $num = $tong->tong($a,$b);
        $this->view("SinhVien",[
            "Page"=>"news",
            "Number"=>$num,
            "color"=>"red",
            "Hobbies"=>["1","2","3"],
            "Choose"=>["news","contact"],
            "SV"=>$tong->getSv()
        ]); //["$key"=>$value] $key là tên biến, $value là giá trị 
         // Trả về view do extend controller->require $view,lấy gtri của $view
        // = require .../SinhVien.php
        //echo "Tổng $a và $b là :".$tong->tong($a,$b);
        // Hàm tổng của Model->tong thì tham số truyền vào lấy dữ liệu từ hàm tổng của Controller/Home
    }

    function Plus1(){
        $cone =  $this->model("SinhVienModel");
        $this->view("BangDiem",[
            "Page"=>"news",
            "Hobbies"=>["1","2","3"],
            "color"=>"red",
            "SV"=>$cone->getSv()
        ]);
    }
}