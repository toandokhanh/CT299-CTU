<?php

    echo "String function in PHP <br/> <br/> <br/>"; 
    $fullName = "Do Khanh Toan";
    echo "$fullName <br/>";
    echo " - Độ dài chuỗi (Lengh): ". strlen($fullName). "<br/>";
    echo " - Đảo ngược: ". strrev($fullName). "<br/>";
    echo " - Chữ thường: ". strtolower($fullName), "<br/>";
    echo " - Chữ hoa: ". strtoupper($fullName), "<br/>";
    echo " - Tsìm kiếm và thay thế: ". str_replace(' ',' - ',$fullName), "<br/>";
    echo "!!! Trong PHP chúng ta dùng printf như trong C <br/>";
    echo "------------------------------------------------- <br/>" ;
?>