<!DOCTYPE html>
<html>
<head>
	<title>Sign-up Page </title>
	<style>
	h1 {background-color: mediumseagreen; border: 3px; display: inline-block;}
	body {font-family: Arial, sans-serif; background-color: #007cdc; color: #ffffff;}
	form {border: 3px solid #f1f1f1;}
	input[type="text"] {
		width: 100%;
		padding: 15px;
		margin: 5px 0 12px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
		background: #d0d1d5;
	}

	background-color { #007cdc}
</style>
</head>
<body>
	<h1>Sign-Up Form</h1>

	<form>
		<div>
			<label for="fname"><b>First name</b></label>
			<input type="text" name="fname" required>
			<label for="lname"><b>Last name</b></label>
			<input type="text" name="lname" required>
			<label for="email"><b>Email</b></label>
			<input type="text" name="email" required>
			<label for="phone"><b>Phone number</b></label>
			<input type="text" name="phone" required>
			<label for="birthday"><b>Birthday</b></label>
			<input type="text" name="birthday" required>
			<label for="gender"><b>Gender</b></label>
			<input type="text" name="gender" required>
		</div>
	</form>
</body>
</html>