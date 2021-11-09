<?php
    session_start();//開啟紀錄
    unset($_SESSION["id"]);//移除id值
    echo "登出成功....";//顯示登出成功
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";//一段時間後進到login.html

?>