<!DOCTYPE html>
<html>
<head>
	<title>all in one round two</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<table border="1" align="center" width="80%">
	<caption>form table</caption>
	<form name="log" action="1.php" method="post">
	<tr>
		<th>input</th>
		<td>
			<input type="text" name="name" value="namehere" /><br />
			<input type="password" name="pass" value="passhere" />
		</td>
	</tr>
	<tr>
		<th>select</th>
		<td>
			<input type="checkbox" name="lo[]" value="play" checked />play<br/>
			<input type="checkbox" name="lo[]" value="read"/>read<br/>
			<input type="checkbox" name="lo[]" value="think" />think<br/>
		</td>
	</tr>
	<tr>
		<th>choose</th>
		<td>
			<input type="radio" name="sex" value="male" />male<br />
			<input type="radio" name="sex" value="female" checked />female<br />
		</td>
	</tr>
	<tr>
		<th>select1</th>
		<td>
			<select name="mood">
			<option value="no">please select</option>
			<option>bad</option>
			<option value="good" selected>good</option>
			</select>
		</td>
	</tr>
	<tr>
		<th>select2</th>
		<td>
			<select name="moodpro[]" size="3" multiple >
			<option value="no">please select</option>
			<option selected>bad</option>
			<option value="good">good</option>
			</select>
		</td>
	</tr>
	<tr>
		<th>textarea</th>
		<td>
			<textarea cols="10" rows="5" name="area">dashfdjakjdfjsdhfjskahdfkjashdfkjashfkjashklj</textarea>
		</td>
	</tr>
	<tr>
		<th>file</th>
		<td>
			<input type="file" name="file" />
		</td>
	</tr>
	<tr>
		<th>submit</th>
		<td>
			<input type="submit" name="sub" value="readygo" />
			<input type="reset" value="reset" />
		</td>
	</tr>
	</form>
</table>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
</body>
</html>