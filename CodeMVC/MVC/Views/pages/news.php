<h1>Views News</h1>
<table>
    <tr>
        <td>ID:</td>
        <td>Ngày Sinh:</td>
        <td>Năm Sinh:</td>
    </tr>

<h2> <?php  //print_r($data["Hobbies"]);
            //echo $data["Hobbies"][1]; 
            while($row = mysqli_fetch_array($data["SV"])){
                ?>
                <!--//echo "<br>A";-->
                </tr>
               <td><?php echo $row["id"]; ?></td>
               <td><?php echo $row["hoten"];?></td>
               <td><?php echo $row["namsinh"];?></td>
               <td><a href="edit.php?id=<?php echo $row["id"] ?>">Sửa</a>
                    <a href="delete.php?id=<?php echo $row["id"] ?>">Xóa</a></td>
                <tr>
            <?php } ?>
        </h2>
            </table>
          