<?php 
Class App{
    //http://localhost:8080/CodeMVC/Home/SayHi/1/2/3
        protected $controller="Home"; // đại diện cho Home, gán gtri mặc định là Home
        protected $param=[]; // Đại diện cho 1/2/3,gán gtri mặc định là []
        protected $action="SayHi"; // Đại diện cho SayHi, gán gtri mặc định là Sayhi

    function __construct(){

        //return __METHOD__;
        echo "Hello";

        $arr = $this->UrlProcess();// khai báo biến $arr là các chuỗi giá trị của hàm UrlProcess
        echo "<br>";
        //print_r($arr);


        // Xử lý Controller
        if(file_exists("./MVC/Controllers/".$arr[0].".php")){
            // nếu tồn tại require
            $this->controller = $arr[0];
            // Khi xét địa chỉ thay đổi sẽ theo $this->controller trước nếu $arr trùng và có trong Controllers thì sẽ chạy theo file Controllers khai báo trên.
            unset($arr[0]); // Nếu unset() vị trí arr[0] thì khi in ra print_r($arr); thì sẽ k hthi $this->controller
        }
        echo $this->controller;
        echo"<hr>";
        require_once("./MVC/Controllers/".$this->controller.".php"); 
        $this->controller = new $this->controller;
        //BIẾN TRONG MODEL PHẢI ĐƯỢC KHỞI TẠO THÌ MỚI THỰC HIỆN ĐC KO SẼ BÁO LỖI
        //(Câu lệnh trên để tạo mới 1 controller mới thì sau khi khởi tạo trong Home đối tượng SayHi gọi getSV từ SinhVienModel phải tạo mới class để n load lại file) 
        //vd: ... = new Home;

        //echo __METHOD__;
        //else 
        ///echo "lol";


        // Xử lý ACTION
        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){// Nếu Phương thức tồn tại vd SayHi và Show có trong Home tồn tại và chỉ ra $arr[2] thì hiển thị đc
                $this->action = $arr[1];// Nếu unset() vị trí arr[0] thì khi in ra print_r($arr); thì sẽ k hthi  
            }
            unset($arr[1]); // khi để $this->Controller thì mặc định n goi theo biến $controller và mặc định là $this->action
        }// Nếu là abc thì k có bào lỗi vì có có phương thức trong Home
        echo $this->action;

        // Xử lý Param
        $this->param = $arr? array_values($arr):[];
        echo"<hr>";
        call_user_func_array([$this->controller,$this->action],$this->param);
        
        /*echo"<hr>";
        echo $this->controller."<br>";
        echo $this->action."<br>";
        print_r($this->param);*/
        //echo $this->action;
    }

    function UrlProcess(){
        // url: Home/SayHi/1/2/3 
        if(isset($_GET['url'])){
            return explode("/",filter_var(trim($_GET["url"],"/"))); // cắt chuỗi và điền sau hàm trim để chuỗi k có kí tự phía sau(loại bỏ khoảng trắng)
            // Sau khi cắt chuỗi và trả về gtri
            //Array ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 3 )

            //echo "<br>Chào mừng:".$_GET["url"];}
        }

        // xử lý controller
        // ktra xem file Home.php có tồn tại k
        
    }
}

?>