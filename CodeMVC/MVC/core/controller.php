<?php
class controller{
    //require_once("")

    public function model($model){
        require_once("./MVC/Models/".$model.".php");
        return new $model;
        // Return để sau khi trả về n trả về biến $model theo tên cuả controller mình khai báo trong biến $model
    }

    public function view($view,$data=[]){
        require_once("./MVC/Views/".$view.".php");
    } 
}