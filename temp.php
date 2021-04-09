<?php include('form.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
</head>
<body>
	<?php
	$user=new User();
	$data=$user->getData();
	while($row=mysqli_fetch_array($data)){
		echo $row['name'];
		echo $row['email'];
		echo "<br>";
	}
	?>
<form method="GET">
	<table>
		<tr>
			<td>
				<h2>MY form</h2>
			</td>
		</tr>
		<tr>
			<td>
				name
			</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>
				email id
			</td>
			<td>
				<input type="text" name="email_id">
			</td>
		</tr>
		<tr>
			<td>
				<button name="submit">submit</button>
			</td>
		</tr>
	</table>
</form>
<?php
	if(isset($_GET['submit'])){
		$user->form_handler($_GET['name'],$_GET['email_id']);
	}
?>
</body>
</html>
