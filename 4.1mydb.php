<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");//連接mysqli數據庫
    
    $result=mysqli_query($conn, "select * from user");// 查詢數據庫

    $row=mysqli_fetch_array($result);

    echo $row["id"] + " " + $row["pwd"]; 
?>