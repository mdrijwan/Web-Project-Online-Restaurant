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
$query_Recordset3 = "SELECT * FROM `user-login`";
$Recordset3 = mysql_query($query_Recordset3, $delicious_conn) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['loginusername'])) {
  $loginUsername=$_POST['loginusername'];
  $password=$_POST['loginpw'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "Welcome delicious.php";
  $MM_redirectLoginFailed = "login_fail.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_delicious_conn, $delicious_conn);
  
  $LoginRS__query=sprintf("SELECT username, password FROM `user-login` WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $delicious_conn) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>|| WELCOME ||</title>
</head>		
<style>

body{
	background-color: #000;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

  
.div2{
	position: absolute;
	left: 179px;
	width: 965px;
	height: 358px;
	top: 281px;
	padding-bottom: 10px;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 10px;
	color: #000;
}

.div3{
	position: absolute;
	left: 170px;
	width: 331px;
	height: 249px;
	border: 1px solid #CC0000;
	top: 717px;
	padding-top: 10px;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	background-image: url(rsz_12.jpg);
	color: #F00;
}

.div4 {
	position: absolute;
	left: 800px;
	width: 333px;
	height: 265px;
	border: 1px solid #330033;
	top: 701px;
	padding-bottom: 10px;
	padding-left: 10px;
	padding-top: 10px;
	padding-right: 10px;
	background-image: url(rsz_1crnqoj4.jpg);
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-style: normal;
}

.div5{
	position: absolute;
	width: 500px;
	height: 200px;
	border: 1px solid #CC0000;
	top: 1019px;
	padding-top: 10px;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	background-image: url(rsz_delicious_sign_large2.jpg);
	left: -2px;
}

.div6{
	position: absolute;
	width: 500px;
	height: 202px;
	border: 1px solid #CC0000;
	top: 1016px;
	padding-top: 10px;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	left: 794px;
	background-image: url(download.png);
}

h1{
	background-color: #666;
	color:#000;
}

h2{
	background-color:#666;
	color:#F00;
}

table{
	background-color:#666;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
	



</style>
<body>
<p><img src="rsz_delicious_banner.jpg" width="1330" height="200" /></p>
<div align="center">
  <table width="1259" height="35" border="1">
    <tr>
      <td width="130"><div align="center"><a href="Welcome delicious.php">Home</a></div></td>
      <td width="123"><div align="center"><a href="delicious meni.php">Menu</a></div></td>
      <td width="181"><div align="center"><a href="location.php">Location</a></div></td>
      <td width="232"><div align="center"><a href="contact delicious.php">Contact Us</a></div></td>
      <td width="121"><div align="center"><a href="delicious login.php">Login</a></div></td>
      <td width="213"><div align="center"><a href="delicious shopping cart.php">Delivery</a></div></td>
      <td width="213"><div align="center"><a href="delicious register.php">Register</a></div></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div class="div2">
  <h1 align="center">PROMOTIONS</h1>
  <div align="center">
    <table width="520" height="218" border="1">
      <tr>
        <td width="261" height="212"><img src="rsz_7.jpg" width="248" height="206" /></td>
        <td width="243"><img src="rsz_24.jpg" width="257" height="207" /></td>
      </tr>
    </table>
  </div>
  <div align="center">
    <table width="526" border="1">
      <tr>
        <td width="251" height="44">buy 2 main dishes and get a free pancake!</td>
        <td width="259">4 main dishes 4 icecreams every Monday!</td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
</div>
<div class="div3">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h4>&nbsp;</h4>
  <h4><a href="delicious meni.php">CHECK OUT OUR DELICIOUS MENU</a></h4>
</div>


<div class="div4">
  <h4 align="left">LOGIN</h4>
  <form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
    <p>
      <label for="loginusername2">Username</label>
      <input name="loginusername" type="text" id="loginusername2" value="<?php echo $row_Recordset3['username']; ?>" />
    </p>
    <p>
      <label for="loginpw">Password</label>
      <input name="loginpw" type="password" id="loginpw" value="<?php echo $row_Recordset3['password']; ?>" />
    </p>
    <p>
      <input type="submit" name="loginbtn" id="loginbtn" value="Login" />
    </p>
  </form>
  <p>&nbsp;</p>
</div>

<div class="div5">
  <p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<h4 align="right"><a href="About Us.php">MYSTERY BEHIND DELICIOUS!</a></h4>
</div>

<div class="div6">
  <h4>&nbsp;</h4>
  <h4>&nbsp;</h4>
  <h4>&nbsp;</h4>
  <h4><a href="delicious shopping cart.php">HOME DELIVERY 10 TO 10! </a></h4>
</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset3);
?>
