<?php session_start();?>
<?php

if(!isset($_SESSION['qty_salad'] ))
{
	$_SESSION['qty_salad'] =0;
}

if(!isset($_SESSION['qty_lb'] ))
{

	$_SESSION['qty_lb']=0;
}

if(!isset($_SESSION['qty_ms'])) 
{
	$_SESSION['qty_ms']=0;
}

if ($_GET['menu'] == 'salad')
	$_SESSION['qty_salad'] += 1;
	
else if ($_GET['menu'] == 'lamb burger')
	$_SESSION['qty_lb'] += 1;
	
else if ($_GET['menu'] == 'mushroom soup')
	$_SESSION['qty_ms'] += 1;
	

	



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1 align="center">View Shopping Cart
</h1>
<div align="center">
  <table width="397" border="1">
    <tr>
      <td width="137"><div align="center"><strong>MENU</strong></div></td>
      <td width="244"><div align="center"><strong>QUANTITY</strong></div></td>
    </tr>
    <tr>
      <td>Salad</td>
      <td><div align="center"><?php echo $_SESSION['qty_salad']; ?></div></td>
    </tr>
    <tr>
      <td>Lamb burger</td>
      <td><div align="center"><?php echo $_SESSION['qty_lb']; ?></div></td>
    </tr>
    <tr>
      <td>Mushroom soup</td>
      <td><div align="center"><?php echo $_SESSION['qty_ms'];?></div></td>
    </tr>
  </table>
  <p><a href="shoppingcart.php">back to shopping</a></p>
</div>
</body>
</html>