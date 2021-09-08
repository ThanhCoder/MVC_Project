<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="E:\xampp\htdocs\CodeMVC\MVC\public\css\sv.css">
    <title>Document</title>
</head>
<style type="text/css">
    div{
        padding:20px;
    }

    #header{
        background: blue;
    }
    #content{
        background: white;
    }

    #footer{
        background: green;
    }
</style>


<body>
<!--<h3><?php// echo $data["Number"];?></h3>-->
    <!-- Fonts -->
    <!--<h2>Sinh Viên</h2>-->
     <h3><?php  echo $data["Number"];?></h3>
    <!--<input type="text" style ="color: <?php //echo $data["color"];?>" value="<?php //echo $data["color"];?>" >-->
     
    
    <div id="header">
        <li>
            <!--<a href="/".$data["Choose"][1].".php">News</a> -->
        </li>
    </div>
    <div id="content">
        <?php require_once("E:\\xampp\htdocs\CodeMVC\MVC\Views\pages\\".$data["Page"].".php")
              //require_once("./pages/".$data["Page"].".php")
          ?>
         <!-- ./ để ra ngoài vào page -->
    </div>
    <div id="footer"></div>
</body>
</html>