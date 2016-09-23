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
}if (!function_exists("GetSQLValueString")) {
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
$query_Recordset1 = "SELECT * FROM registration";
$Recordset1 = mysql_query($query_Recordset1, $delicious_conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);mysql_select_db($database_delicious_conn, $delicious_conn);
$query_Recordset1 = "SELECT * FROM registration";
$Recordset1 = mysql_query($query_Recordset1, $delicious_conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>

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
<h1 align="center"><img src="rsz_delicious_banner.jpg" alt="" width="1330" height="200" /></h1>
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
<h2>Register:</h2>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="fullname">Full Name:<br />
    </label>
    <input name="fullname" type="text" id="fullname" value="<?php echo $row_Recordset1['fullnme']; ?>" />
  </p>
  <p>
    <label for="mobilenumber">Mobile Number:<br />
    </label>
    <input name="mobilenumber" type="text" id="mobilenumber" value="<?php echo $row_Recordset1['contactno']; ?>" />
  </p>
  <p>
    <label for="email2">Email:<br />
    </label>
    <input name="email" type="text" id="email2" value="<?php echo $row_Recordset1['email']; ?>" />
    <label for="regpassword2"><br />
      <br />
      Password: <br />
    </label>
    <input name="regpassword" type="text" id="regpassword2" value="<?php echo $row_Recordset1['password']; ?>" />
    <label for="confpassword2"><br />
    </label>
  </p>
  <p>
    <label for="State2">State:<br />
    </label>
    <select name="State" id="State2" title="<?php echo $row_Recordset1['state']; ?>">
      <option>KL</option>
      <option>Selangor</option>
    </select>
  </p>
  <p>
    <label for="city2">City:<br />
    </label>
    <select name="city" id="city2" title="<?php echo $row_Recordset1['city']; ?>">
      <option>PJ</option>
      <option>BU</option>
      <option>KD</option>
    </select>
    <label for="postcode2"><br />
      <br />
      Postcode: <br />
    </label>
    <input name="postcode" type="text" id="postcode2" value="<?php echo $row_Recordset1['postcode']; ?>" />
    <label for="mailingad2"><br />
      <br />
      Mailing Adderess:<br />
    </label>
    <input name="mailingad" type="text" id="mailingad2" value="<?php echo $row_Recordset1['address']; ?>" />
  </p>
  <p>
    <input type="submit" name="btnregister" id="btnregister" value="Register" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
