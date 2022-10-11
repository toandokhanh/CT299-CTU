<?php
require ('../db/dbhelper.php');

?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM sinhvien WHERE id = '$id'";
        $sinhvien = executeSingleResult($sql);
        if($sinhvien != NULL){
            $name = $sinhvien['name'];
            $mssv = $sinhvien['mssv'];
            $phone = $sinhvien['phone'];
        }
    }

    if(!empty($_POST)){
        $id = '';
        $name = '';
        $mssv = '';
        $phone = '';
        if(isset($_POST['name'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $mssv = $_POST['mssv'];
            $phone = $_POST['phone'];
        }
        if(isset($id)){
            $sql = "UPDATE `sinhvien` SET `name`='$name',`mssv`='$mssv',`phone`='$phone' WHERE id = '$id'";
            execute($sql);
            header('Location: index.php');
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
		<h1 style="text-align: center;">Thay đổi thông tin sinh viên</h1>
		<div class="btn-group">
			<a href="index.php" class="btn btn-primary " aria-current="page">Danh sách sinh viên</a>
			<a href="add/index.php" class="btn btn-primary">Thêm sinh viên </a>
			<!-- <a href="#" class="btn btn-primary"></a> -->
		</div>
		<br>
		<br>
            <div class="mb-3">
                <form method="post">
                    <input type="text" style="width:30px" id="id" name="id" value="<?php echo "$id"?>"> <br> <br>
                    <label for="name" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên sinh viên " value="<?php echo "$name"?>"> <br>
                    <label for="mssv" class="form-label">Mssv</label> <br>
                    <input type="text" class="form-control" id="mssv" placeholder="Nhập Mssv " value="<?php echo "$mssv"?>"> <br> 
                    <label for="phone" class="form-label">Phone</label> <br>
                    <input type="call" class="form-control" id="phone" placeholder="Nhập số điện thoại " value="<?php echo "$phone"?>"> <br>
                    <button class="btn btn-success" type="submit">Thêm</button>
                </form>
            </div>
		</div>
		</div>
	</div>
	
</body>
</html>