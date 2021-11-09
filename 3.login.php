<?php
//密碼判斷
if(($_POST["id"]=="john")&&($_POST["pwd"]=="john123")){//如果取得的id等於john 且 取得的pwd等於john123
      echo "Welcom";//顯示Welcom
}
else{
      echo "Login failure";//顯示Login failure
}
?>
