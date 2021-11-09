<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");//連接mysqli數據庫
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");// 查詢數據庫
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) {
     echo $row["id"]." ".$row["pwd"]."<br>";//顯示id和pwd的值
   } 
?>