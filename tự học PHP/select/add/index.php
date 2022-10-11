<?php
require_once ('../db/dbhelper.php');
if(!empty($_POST)){
    $name = '';
    $mssv = '';
    $phone = '';
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $mssv = $_POST['mssv'];
        $phone = $_POST['phone'];
    }
    if(!empty($name && $mssv && $phone )){
        $sql = "INSERT INTO `sinhvien`(`name`,`mssv`,`phone`) VALUES ('$name','$mssv','$phone')";
        execute($sql);
        header('Location: ../');
        die();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Danh Mục</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h1 style="text-align: center;">Thêm sinh viên mới</h1>
		<div class="btn-group">
			<a href="../index.php" class="btn btn-primary " aria-current="page">Danh sách sinh viên</a>
			<a href="index.php" class="btn btn-primary active">Thêm sinh viên </a>
			<!-- <a href="#" class="btn btn-primary"></a> -->
		</div>
		<br>
		<br>
            <div class="mb-3">
                <form method="post">
                    <label for="name" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sinh viên "> <br>
                    <label for="mssv" class="form-label">Mssv</label> <br>
                    <input type="text" class="form-control" name="mssv" id="mssv" placeholder="Nhập Mssv "> <br> 
                    <label for="phone" class="form-label">Phone</label> <br>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại "> <br>
                    <button class="btn btn-success" type="submit">Thêm</button>
                </form>
            </div>
		</div>
		</div>
	</div>
	
</body>
</html>