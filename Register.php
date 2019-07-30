<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="doResgister.php" method = "post">
		<table border="0" width="50%">
			<tr>
				<td>Yoyr Name</td>
				<td><input type="text" name="txtName"></td>
			</tr>
			<tr>
				<td>Course</td>
				<td>
					<select name = "cbCourse">
						<option value="C#">C#</option>
						<option value="Java">Java</option>
						<option value="Cloud">Cloud</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Birth Day</td>
				<td><input type="date" name="Birth"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td style="display: flex;">
					<div>
						<input type="radio" name="gender" value="male">Male
					</div>
					<div>
						<input type="radio" name="gender" value="female">Female
					</div>
				</td>
			</tr>
			<tr>
				<td>Favorites</td>
				<td>
					<input type="checkbox" name="book" value="book">Books
					<input type="checkbox" name="car" value="car">Cars
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name=Resgister></td>
			</tr>
		</table>
	</form>

</body>
</html>