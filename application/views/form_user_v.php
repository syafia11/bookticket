<!DOCTYPE html>
<html>
<head>
	<title>Form Input - User</title>
</head>
<body>
<?php
if (isset($user)) {
	foreach ($tbuser as $row) {
		$id=$row->id;
		$username=$row->username;
		$password=$row->password;
		$fullname=$row->fullname;
		$level=$row->level;
		$action="http://localhost/Codeigniter/index.php/User/save_edit";
	}
}
else {
	$id="";
	$username="";
	$password="";
	$fullname="";
	$level="";
	$action="http://localhost/Codeigniter/index.php/User/add";
}
	?>
	<form action="<?php echo $action;?>" method="post">
	<table>
	<tr><td><input type="hidden" name="oldid" value="<?php echo $id; ?>"/></td></tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" value="<?php echo $username; ?>"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password" value="<?php echo $password; ?>"></td>
	</tr>
	<tr>
		<td>Fullname</td>
		<td>:</td>
		<td><input type="text" name="fullname" value="<?php echo $fullname; ?>"></td>
	</tr>
	<tr>
		<td>Level</td>
		<td>:</td>
		<td><select name="level">
		<option value="admin" <?php echo $level=="admin"?"selected" : "" ?> >Admin</option>
		<option value="user" <?php echo $level=="user"?"selected" : "" ?> >User</option></select></td>
	</tr>
	<tr>
		<td><input type="submit" value="simpan"></td>
	</tr>
	</table>
	</form>
</body>
</html>