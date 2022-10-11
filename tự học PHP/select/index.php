<?php
require_once ('db/dbhelper.php');
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
		<h1 style="text-align: center;">Quản lý sinh viên</h1>
		<div class="btn-group">
			<a href="index.php" class="btn btn-primary active" aria-current="page">Danh sách sinh viên</a>
			<a href="add/" class="btn btn-primary">Thêm sinh viên </a>
			<!-- <a href="#" class="btn btn-primary"></a> -->
		</div>
		<br>
		<br>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th>Họ và Tên</th>
							<th>Mssv</th>
							<th>Phone</th>
							<th width="50px">Sửa</th>
							<th width="50px">Xóa</th>
						</tr>
					</thead>
					<tbody>
<?php
//Lay danh sach danh muc tu database
$sql          = 'select * from sinhvien';
$list = executeResult($sql);

$index = 1;
foreach ($list as $item) {
	echo '<tr>
				<td>'.($index++).'</td>
				<td>'.$item['name'].'</td>
				<td>'.$item['mssv'].'</td>
				<td>'.$item['phone'].'</td>
				<td>
					<a  href="edit?id='.$item['id'].'">
						<button class="btn btn-warning">Sửa</button>
					</a>
				</td>
				<td>
				<button class="btn btn-danger" onclick="deleteCategory('.$item['id'].')">Xoá</button>
				</td>
			</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		function deleteCategory(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
			if(!option) {
				return;
			}
			console.log(id)
			//ajax - lenh post
			$.post('ajax.php', {
				'id': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}
	</script>
</body>
</html>