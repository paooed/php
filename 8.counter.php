<?php
    session_start();//開啟紀錄
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;//計數器為1
    else
        $_SESSION["counter"]++;//計數器加1
    echo "counter=".$_SESSION["counter"];//顯示目前計數器
    echo "<br><a href=reset_counter.php>重置counter</a>";//重置計數器
?>