<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Form Input - User</title>
</head>
<body>
	<form action="http://localhost/Codeigniter/index.php/User/add" method="post">
	<table>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>Fullname</td>
		<td>:</td>
		<td><input type="text=" name="fullname"></td>
	</tr>
	<tr>
		<td>Level</td>
		<td>:</td>
		<td><select name="level">
		<option value="admin">Admin</option>
		<option value="user">User</option></select></td>
	</tr>
	<tr>
		<td><input type="submit" value="simpan"></td>
	</tr>
	</table>
	</form>
</body>
</html>