<?php
$departments = ['開発部', '営業部', '人事部'];
?>
<!DOCTYPE html>
<html>

<body>
	<h1>社員情報入力フォーム</h1>

	<form action="confirm.php" method="POST">
		<table>
			<tr>
				<th>社員名</th>
				<td><input name="employee_name"></td>
			</tr>
			<tr>
				<th>年齢</th>
				<td><input name="employee_age"></td>
			</tr>
			<tr>
				<th>所属部署</th>
				<td>
					<select name="department">
						<?php foreach ($departments as $department) { ?>
							<option name="<?php echo $department; ?>"><?php echo $department; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
		</table>
		<input type="submit" />
	</form>
</body>

</html>