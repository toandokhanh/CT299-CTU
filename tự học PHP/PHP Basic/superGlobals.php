<?php 
    echo "SuperGlobals in PHP  <br/>";
    

    // biến SuperGlobals
    $name = $_GET['name'] ?? '';
    $age = $_GET['age'] ?? '';
    echo $name. '<br/>';
    echo $age. '<br/>';
    // 1:21:00
?> 