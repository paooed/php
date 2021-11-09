<?php
    session_start();//開啟紀錄
    unset($_SESSION["counter"]);//移除counter變數
    echo "counter重置成功....";//顯示重置成功
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";//一段時間後進到counter.php

?>