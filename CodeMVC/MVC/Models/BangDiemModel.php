<?php
class BangDiemModel extends db{
    public function getBangDiem(){
        // connect db ...
        return "Có Điểm = 10";
    }

    public function tongdiemSV($toan,$ly,$hoa){
        $tong =0;
        if($toan>=1 && $toan<=10 || $ly>=1 && $ly<=10 || $hoa>=1 && $hoa<=10 ){
            $tong = ($toan+$ly+$hoa)/3;
            return $tong;
            if($tong <5){
                    return "Học lực yếu";
            }
            else if($tong>5 && $tong<6.4 ){
                echo("Học lực trung bình");
            }
            else if($tong>6.5 && $tong<8 ){
                echo("Học lực khá");
            }
            else if($tong>8) {
                return "Học lực giỏi";
            }
            //return $tong;
        }
        else{
            echo "Điểm không đủ yêu cầu!";
        }
    }

    public function tong($n,$m){
        return $n+$m;
    }

    public function getSV(){
        $query="select * from sinhvien";
        return mysqli_query($this->conn,$query);
    }
}
?>