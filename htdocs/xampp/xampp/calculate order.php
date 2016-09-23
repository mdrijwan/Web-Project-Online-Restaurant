<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 

$_POST ['txtname'];
$_POST ['txtquantity'];

$total = $_POST['txtquantity'] * 7.9;


?>
<body>
<h1>Thank you for visiting delicious!
</h1>
<p>Your order is: <?php echo $_POST ['txtname']; ?> </p>
<p>RM: <?php echo $total; ?> </p>
</body>
</html>