<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <input type="text" style ="color: <?php echo $data["color"];?>" value="<?php echo $data["color"];?>" >
        <?php require_once("E:\\xampp\htdocs\CodeMVC\MVC\Views\pages\\".$data["Page"].".php")
              //require_once("./pages/".$data["Page"].".php")
          ?>
</body>
</html>