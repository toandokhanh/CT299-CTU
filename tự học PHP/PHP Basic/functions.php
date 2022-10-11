<?php 
    echo "functions.php <br/>";

        // // day la 1 function 
        // function my_f($name) {
        //    echo "Hello $name";
        // }
        // // gọi hàm như JS
        // my_f("Toan")


        //  $age = 21;


        // function myFuction() {
        //     global $age;
        //     $name = "Toan sieu dep trai";
        //     echo $age;

        // }

        // myFuction()




        // arrow function
        // $function_my = fn($a, $b) => $a + $b;
        // echo $function_my(2,8)



        // kiểm tra trong mảng có bao nhiêu phần tủ

        // $name = ['toan', 'tin', 'kiep'];
        // echo count($name);
        


        //ham foreach
        // $names = ['toan', 'tin', 'kiep'];
            // foreach($names as $index => $name) {
            //     echo "$index: $name <br/>";
            // }

        // $items = [
        //     "name" => "Toan",
        //     "age" => 21,
        //     "phone" => 38081311093812,
        //     "email" => "toan@gmail.com"
        // ];


        //     foreach($items as $key => $value) {
        //         echo "$key: $value <br/>";
        //     }

        // gán giá trị măc định như JS
        // $myFuction = fn($name = 'undifine', $age = '0') => "Name: $name <br> Age: $age";

        // echo $myFuction()

        
        /**
         * 
         *PHP là một ngôn ngữ được đánh máy lỏng lẻo
        *Trong ví dụ trên, lưu ý rằng chúng ta không phải cho PHP biết kiểu dữ liệu nào của biến.
        *PHP tự động liên kết một kiểu dữ liệu với biến, tùy thuộc vào giá trị của nó. Vì các kiểu dữ liệu không được đặt theo nghĩa chặt chẽ, bạn có thể làm những việc như thêm một chuỗi vào một số nguyên mà không gây ra lỗi.
        *Trong PHP 7, khai báo kiểu đã được thêm vào. Điều này cung cấp cho chúng tôi một tùy chọn để chỉ định kiểu dữ liệu mong đợi khi khai báo một hàm và bằng cách thêm strict khai báo, nó sẽ tạo ra "Lỗi nghiêm trọng" nếu kiểu dữ liệu không khớp.
        */

        // function addNumbers($a, $b = 10) {
        //     return $a + $b;
        //   }
        //   echo addNumbers(5); 
        
        // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
        
        
        


        // $names = ['Toan', 'Tín', 'Kiệp'];
        



        // echo "Số phần tử trong mảng là: ".count($names);

        // echo "check 1 phần tử xem có trong mảng không : ".var_dump(in_array('Thư', $names));
        //in_array

        //thêm 1 phần tử vào array : array_push
        //xóa phần tử cuối cùng chúng ta dùng
        // array_pop($names);
        //xóa phần tử đầu tiên array_shift($names);
        //thêm phần tử ở đầu array_unshift($names, 'cha');
        //xóa phần tử bất kì trong mảng 
        // unset($names[1]); nó xóa luôn cả index
             
        // array_push($names, 'Thư', 'Khôi');




        // $arrayChuck = array_chunk($names, 3);
        // print_r($arrayChuck); // đây là mảng được chặc ra 3 phần tữ 1 mảng
        // print_r($names); // đây là phần tử gốc











        // nối mảng 
        //rest trong PHP tương tự với JS


        // $arrayA = [1,2,3];
        // $arrayB = [4,5,6];


        // $arrayC = [...$arrayA];
        // array_push($arrayA, '100000');
        // print_r($arrayA);
        // print_r($arrayC);





        //COMBINE
        // $key = ['name', 'age', 'email', 'phone'];
        // $value = ['Toan', '19', 'toanb2012046@gmail.com', '00991389383'];
        

        // $combine = array_combine($key, $value);
        // $keyArray = array_keys($combine);
        // $valueArray = array_values($combine);

        // print_r($keyArray)







        //Number
        $nums = range(0, 9);
        $squared_num = array_map(fn($num) => 
            $num * $num
        , $nums);
        
        $filter_num = array_filter($nums ,fn($num) => 
            $num % 2 == 0);

        print_r($squared_num);
        print_r($filter_num);
?>