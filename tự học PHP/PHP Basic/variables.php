<?php
    // echo "hello" , "<br/>";
    // $age = 19; //int
    // $name = 'Toan';// stirng
    // $is_handsome = true;



    // echo $name, ' is ' ,$age, ' years old';
    // //tôi có cách tốt hơn : ))))
    // echo "<br/> $name is $age years old"




    /// variables 


    // ở đây nó sẽ đưa 5 xuống cuối và gán cho 5
    // nằm trong thẻ <pre></pre> trong html
    // echo '5', '<br/>';
    // echo '4', '<br/>';
    // echo '3', '<br/>';
    // echo '2', '<br/>';
    // echo '1', '<br/>';
   


    //constants are Global
    // đây là cách khai báo const ko cần dùng $ :
    // define('name', 'Toanvippro');
    // define('age', '20');
    // $age_fake = 21;
    // $age_fake = 19;

    // echo name, $age_fake;


    define("GREETING", "Welcome to W3Schools.com!");
    $a = 1;
    function myTest() {
    echo GREETING;
    // echo $a
    }
    
    myTest();



?>