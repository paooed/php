<?php
    error_reporting(0);//禁用錯誤報告
    $conn=mysqli_connect("localhost","root","", "mydb");//連接mysqli數據庫
    $result=mysqli_query($conn, "select * from bulletin");// 查詢數據庫
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//顯示文字
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];//顯示bid的值
        echo "</td><td>";
        echo $row["type"];//顯示type的值
        echo "</td><td>"; 
        echo $row["title"];//顯示title的值
        echo "</td><td>";
        echo $row["content"]; //顯示content的值
        echo "</td><td>";
        echo $row["time"];//顯示time的值
        echo "</td></tr>";
    }
    echo "</table>"
?>