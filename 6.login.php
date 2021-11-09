<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");//連接mysqli數據庫
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");// 查詢數據庫
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;//將login設為FALSE
   while ($row=mysqli_fetch_array($result)) {//迴圈
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;//將login設為TRUE
     }
   } 
   if ($login==TRUE)
     echo "welcome!!";//顯示Welcom
  else
     echo "id/pwd wrong!!";//顯示id/pwd wrong
?>