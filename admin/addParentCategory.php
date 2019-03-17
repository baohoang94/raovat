<?php require_once('../connect.php') ?>
<?php
if (!empty($_POST)) {
	$sql_insert = "INSERT INTO parentsCategory(name) VALUES('".$_POST['name']."')";
	$query_insert = mysqli_query($con, $sql_insert);
	if ($query_insert) {
		echo 'Thêm thành công';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý chuyên mục</title>
</head>
<body>
	<a href="index.php" title="">Về trang quản lý</a><br>
	Các chuyên mục lớn đang có: <br>
	<?php 
		$sql = 'SELECT * FROM parentsCategory';
		$query = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($query)) {
		    echo '- ' , $row['name'] , '<br/>';
		}
	?>
	Thêm một chuyên mục cha mới: <br>
	<form action="" method="post">
	Tên chuyên mục cha: <input type="text" name="name" value=""><br>
	<input type="submit" value="Thêm">
	</form>
</body>
</html>