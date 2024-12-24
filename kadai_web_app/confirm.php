<?php
$employee_name = $_POST['employee_name'];
$employee_age = $_POST['employee_age'];
$department = $_POST['department'];
?>
<!DOCTYPE html>

<html>

<body>
	<h1>入力内容をご確認ください。</h1>
	問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。<br/>
	<br/>

	<table border>
		<tr>
			<th>項目</th>
			<th>入力内容</th>
		</tr>
		<tr>
			<td>社員名</td>
			<td><?php echo $employee_name; ?></td>
		</tr>
		<tr>
			<td>年齢</td>
			<td><?php echo $employee_age; ?></td>
		</tr>
		<tr>
			<td>所属部署</td>
			<td><?php echo $department; ?></td>
		</tr>
	</table>

	<br/>

	<input type="button" value="確定" onclick="location.href='complete.php';">
	<input type="button" value="キャンセル" onclick="history.back();">
</body>

</html>