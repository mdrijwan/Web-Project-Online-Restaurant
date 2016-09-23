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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO customer_feedback (name, contactno, email, message) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['feedbackname'], "text"),
                       GetSQLValueString($_POST['feedbackno'], "text"),
                       GetSQLValueString($_POST['feedbackemail'], "text"),
                       GetSQLValueString($_POST['feedbackarea'], "text"));

  mysql_select_db($database_delicious_conn, $delicious_conn);
  $Result1 = mysql_query($insertSQL, $delicious_conn) or die(mysql_error());

  $insertGoTo = "Welcome delicious.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_delicious_conn, $delicious_conn);
$query_Recordset3 = "SELECT * FROM customer_feedback";
$Recordset3 = mysql_query($query_Recordset3, $delicious_conn) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

$query_Recordset3 = "SELECT * FROM customer_feedback";
$Recordset3 = mysql_query($query_Recordset3, $delicious_conn) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONTACT</title>
</head>

<style>

body{
	background-color: #000;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color:
	#666;
}

h1{
	background-color: #666;
	color:#000;
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
	color: #000;
}

table{
	background-color: #666;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: #000;
}

	

</style>



<body>
<p><img src="rsz_delicious_banner.jpg" alt="" width="1330" height="200" /></p>
<div align="center">
  <table width="1433" height="32" border="1">
    <tr>
      <td width="176"><div align="center"><a href="Welcome delicious.php">Home</a></div></td>
      <td width="168"><div align="center"><a href="delicious meni.php">Menu</a></div></td>
      <td width="245"><div align="center"><a href="location.php">Location</a></div></td>
      <td width="294"><div align="center"><a href="contact delicious.php">Contact us</a></div></td>
      <td width="168"><div align="center"><a href="delicious login.php">Login</a></div></td>
      <td width="168"><div align="center"><a href="delicious shopping cart.php">Delivery</a></div></td>
      <td width="168"><div align="center"><a href="delicious register.php">Register</a></div></td>
    </tr>
  </table>
</div>
<h1 align="left">Contact Us </h1>
<p>Whether you want to say hi, ask us a question or make a reservation for lunch or dinner, simply email us at delicious@delicious.com or give us a call at the number below:</p>
<p>Telephone: 123-456-789, 324-567-780</p>
<p>Fill up the feedback form below, hopefully we will take your feedback into consideration!</p>
<form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
  <p>
  
 
    <label for="feedbackname"> Name:  <br />
    </label>
    <input name="feedbackname" type="text" id="feedbackname" value="<?php echo $row_Recordset3['name']; ?>" />
  </p>
  <p>
    <label for="feedbackno">Contact number:<br />
    </label>
    <input name="feedbackno" type="text" id="feedbackno" value="<?php echo $row_Recordset3['contactno']; ?>" />
  </p>
  <p>
    <label for="feedbackemail">Email:<br />
    </label>
    <input name="feedbackemail" type="text" id="feedbackemail" value="<?php echo $row_Recordset3['email']; ?>" />
  </p>
  <p>
  <label for="feedbackarea">Your Message:</label></p>
  <p>
    <textarea name="feedbackarea" id="feedbackarea" cols="45" rows="5"><?php echo $row_Recordset3['message']; ?></textarea>
  </p>
  <p>
    <input type="submit" name="feedbacksubmit" id="feedbacksubmit" value="Submit" />
  </p>
 
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset3);
?>
