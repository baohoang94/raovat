<?php require_once('../connect.php') ?>
<?php
if (!empty($_POST)) {
	$sql_insert = "INSERT INTO category(parentCategoryId, name) VALUES('".$_POST['parentsCategory']."', '".$_POST['name']."')";
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
	<title>Thêm chuyên mục mới</title>
</head>
<body>
	<?php 
		$sql = 'SELECT * FROM parentsCategory';
		$query = mysqli_query($con, $sql);
	?>
	<a href="index.php" title="">Về trang quản lý</a>
	<form action="" method="post">
		Chuyên mục cha: <br>
		<select required="" name="parentsCategory">
			<?php
		        while ($row = mysqli_fetch_array($query)) {
		            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		        }
		    ?>
		</select>
		<br>
		Tên chuyên mục: <br>
		<input type="text" required="" name="name" value=""><br>
		<input type="submit" value="Thêm">
	</form>
</body>
</html>