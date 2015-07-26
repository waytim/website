<?php

$submit = $_POST["submit"];

if (!$submit) {
?>
<html>
<title>Era PSOBB Server Signup</title>
<body>
<center>
<table width="650">
<tr>
<td><center><img src="Jack283.JPG"><font face="Tahoma"><br><b><h3>SPSOS "Tethealla"</h3>Test Server Signup</center><br>
<form method="POST" action="signup.php">
Desired account ID: <input name="username"><br>
Password: <input name="password1" type=password><br>
Password (confirm): <input name="password2" type=password><br>
E-mail (used for account recovery): <input name="aabf1"><br>
E-mail (confirm): <input name="aabf2"><br></font>
<span style="display:none;visibility:hidden;">
<label for="email">
Ignore this text box.  You've been warned! : )
</label>
<input type="text" name="email" size="1" value="" />
</span><br><input type="submit" name="submit" value="Register!">
</td></tr></table>
</body>
</html>
<?php
}
else
{
$fake = addslashes ($_POST["email"]);
if ($fake) die;
if ((strlen ($_POST["username"]) > 16) || (strlen ($_POST["password1"]) > 16))
	die ("Username or password is too long. (16 char max)");
$username = addslashes ($_POST["username"]);
$pw = $_POST["password1"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];
$username = strtolower ($username);
$password1 = strtolower ($password1);
$password2 = strtolower ($password2);
$email1 = addslashes ($_POST["aabf1"]);
$email2 = addslashes ($_POST["aabf2"]);
if (!$username) die ("No desired account ID specified.");
if (!$password1) die ("No password specified.");
if ($password1 != $password2) die ("Input passwords do not match.");
if ($email1 != $email2) die ("Input emails do not match.");
$reg_seconds = round(time() / 3600);
$password1 .= "_" . $reg_seconds . "_salt";
$password1 = addslashes($password1);
if (!$db = @mysql_connect ("localhost", "root", "bigtime") )
	die ("Can't connect to MySQL.");
if (!@mysql_select_db ("psodb", $db))
	die ("Can't select PSO database.");
$sql = "SELECT * from account_data WHERE username='" . $username . "'";
$result = mysql_query ($sql, $db);
if (!$result) die ("Unable to query database.");
if ($myrow = mysql_fetch_array($result))
	die ("Account name is already taken.");
$password1 = md5 ($password1);
$sql = "INSERT into account_data (username,password,email,regtime,isgm,isactive) "
. "VALUES ('". $username . "', '" . $password1 . "', '" . $email1 . "', '" . $reg_seconds . "', '0', '1')";
$result = mysql_query ($sql, $db);
if (!$result) die ("Unable to add account into database.");
$gcnum = mysql_insert_id();
echo "Account " . $username ." was successfully created!<br><br>\r\nYour new guild card # is " . $gcnum;
}
?>