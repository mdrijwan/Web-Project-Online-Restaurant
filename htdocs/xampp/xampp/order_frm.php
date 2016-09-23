<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>order form</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="calculate order.php">
  <div align="center">
    <h1>ORDER FORM    </h1>
    <table width="325" height="150" border="1">
      <tr>
        <td width="51">Name</td>
        <td width="258"><label for="txtname"></label>
        <input type="text" name="txtname" id="txtname" /></td>
      </tr>
      <tr>
        <td>Quantity</td>
        <td><label for="txtquantity"></label>
        <input type="text" name="txtquantity" id="txtquantity" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="total" id="total" value="Calculate total" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</form>
</body>
</html>