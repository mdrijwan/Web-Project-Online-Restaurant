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
      <td width="176"><div align="center">Home</div></td>
      <td width="168"><div align="center">Menu</div></td>
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
    <input type="text" name="fullname" id="fullname" />
  </p>
  <p>
    <label for="mobilenumber">Mobile Number:<br />
    </label>
    <input type="text" name="mobilenumber" id="mobilenumber" />
  </p>
  <p>
    <label for="email2">Email:<br />
    </label>
    <input type="text" name="email" id="email2" />
    <label for="regpassword2"><br />
      <br />
      Password: <br />
    </label>
    <input type="text" name="regpassword" id="regpassword2" />
    <label for="confpassword2"><br />
      <br />
      Confirm Password:<br />
    </label>
    <input type="text" name="confpassword" id="confpassword2" />
  </p>
  <p>
    <label for="State2">State:<br />
    </label>
    <select name="State" id="State2">
    </select>
  </p>
  <p>
    <label for="city2">City:<br />
    </label>
    <select name="city" id="city2">
    </select>
    <label for="postcode2"><br />
      <br />
      Postcode: <br />
    </label>
    <input type="text" name="postcode" id="postcode2" />
    <label for="mailingad2"><br />
      <br />
      Mailing Adderess:<br />
    </label>
    <input type="text" name="mailingad" id="mailingad2" />
  </p>
  <p>
    <input type="submit" name="btnregister" id="btnregister" value="Register" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>