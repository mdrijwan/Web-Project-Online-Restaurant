<?php require_once('Connections/delicious_conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_delicious_conn, $delicious_conn);
$query_Recordset1 = "SELECT * FROM user_login";
$Recordset1 = mysql_query($query_Recordset1, $delicious_conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<style>

body{
	background-color: #000;
}

h2{
	background-color: #666;
	color: #000;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

label{
	background-color: #666;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 20px;
}

table{
	background-color:#666;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

	

</style>


<body>
<h2 align="center">DELICIOUS</h2>
<h2 align="center">make life a little more delicious</h2>
<div align="center">
  <table width="1259" height="32" border="1">
    <tr>
      <td width="176"><div align="center"><a href="Welcome delicious.php">Home</a></div></td>
      <td width="168"><div align="center"><a href="delicious meni.php">Menu</a></div></td>
      <td width="245"><div align="center">Location</div></td>
      <td width="294"><div align="center"><a href="contact delicious.php">Contact us</a></div></td>
      <td width="168"><div align="center"><a href="delicious login.php">Login</a></div></td>
      <td width="168"><div align="center"><a href="delicious register.php">Register</a></div></td>
    </tr>
  </table>
</div>
<div align="center">
  <h2 align="left">Login</h2>
</div>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="username2">Username:<br />
    </label>
    <input type="text" name="username" id="username2" />
  </p>
  <p>
    <label for="password">Password:<br />
    </label>
    <input type="password" name="password" id="password" />
  </p>
  <p>
    <input type="submit" name="btnlogin" id="btnlogin" value="Login" />
  </p>
  <p><a href="delicious register.php">not a member yet? click here to register!</a></p>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
