<?php session_start();?>
<?php

if(!isset($_SESSION['qty_chickenburger'] ))
{
	$_SESSION['qty_chickenburger'] =0;
}

if(!isset($_SESSION['qty_beefburger'] ))
{

	$_SESSION['qty_beefburger']=0;
}

if(!isset($_SESSION['qty_chickenpizza'])) 
{
	$_SESSION['qty_chickenpizza']=0;
}

if(!isset($_SESSION['qty_pepperonipizza'])) 
{
	$_SESSION['qty_pepperonipizza']=0;
}

if(!isset($_SESSION['qty_hawaiianpizza'])) 
{
	$_SESSION['qty_hawaiianpizza']=0;
}

if(!isset($_SESSION['qty_bolognese'])) 
{
	$_SESSION['qty_bolognese']=0;
}

if(!isset($_SESSION['qty_oleo'])) 
{
	$_SESSION['qty_oleo']=0;
}

if(!isset($_SESSION['qty_beefsteak'])) 
{
	$_SESSION['qty_beefsteak']=0;
}

if(!isset($_SESSION['qty_mexicanchicken'])) 
{
	$_SESSION['qty_mexicanchicken']=0;
}

if(!isset($_SESSION['qty_espatada'])) 
{
	$_SESSION['qty_espatada']=0;
}




if ($_GET['menu'] == 'Chicken Burger')
	$_SESSION['qty_chickenburger'] += 1;
	
else if ($_GET['menu'] == 'Beef Burger')
	$_SESSION['qty_beefburger'] += 1;
	
else if ($_GET['menu'] == 'Chicken Pizza')
	$_SESSION['qty_chickenpizza'] += 1;
	
else if ($_GET['menu'] == 'Pepperoni Pizza')
	$_SESSION['qty_pepperonipizza'] += 1;
	
	else if ($_GET['menu'] == 'Hawaiian Pizza')
	$_SESSION['qty_hawaiianpizza'] += 1;
	
	else if ($_GET['menu'] == 'Beef Bolognese Pasta')
	$_SESSION['qty_bolognese'] += 1;
	
	else if ($_GET['menu'] == 'Spicy Oleo Pasta')
	$_SESSION['qty_oleo'] += 1;
	
	else if ($_GET['menu'] == 'Grilled Beef Steak')
	$_SESSION['qty_beefsteak'] += 1;
	
	else if ($_GET['menu'] == 'Mexican Chicken')
	$_SESSION['qty_mexicanchicken'] += 1;
	
	else if ($_GET['menu'] == 'Chicken Espatada')
	$_SESSION['qty_espatada'] += 1;
	
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
</head>
<?php 

//$_POST ['txtname'];
//$_POST ['txtquantity'];

$total = $_POST['txtquantity' * 7.9];


?>

<style>

table{
	background-color: #666;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: #000;
}

h2{
	background-color:#666;
	color:#F00;
}

body{
	background-color: #000;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: #FFF;
}

</style>

<body>
<p><img src="rsz_delicious_banner.jpg" alt="" width="1330" height="200" /></p>
<div align="center">
  <table width="1259" height="35" border="1">
    <tr>
      <td width="130"><div align="center">Home</div></td>
      <td width="123"><div align="center">Menu</div></td>
      <td width="181"><div align="center">Location</div></td>
      <td width="232"><div align="center"><a href="contact delicious.php">Contact Us</a></div></td>
      <td width="121"><div align="center"><a href="delicious login.php">Login</a></div></td>
      <td width="213"><div align="center">Delivery</div></td>
      <td width="213"><div align="center"><a href="delicious register.php">Register</a></div></td>
    </tr>
  </table>
</div>
<p></p>
<div align="center">
  <h2>YOUR SHOPPING CART</h2>
  <table width="816" height="377" border="1">
    <tr>
      <td width="231" height="49"><h3 align="center">ITEM</h3></td>
      <td width="131"><div align="center">
        <h3>UNIT PRICE </h3>
      </div></td>
      <td width="218"><div align="center">
        <h3>QUANTITY</h3>
      </div></td>
      <td width="208"> <div align="center">
        <h3>PRICE</h3>
      </div></td>
    </tr>
    <tr>
      <td height="34"><div align="center">Chicken Burger</div></td>
      <td><div align="center">7.50</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_chickenburger']; ?></div></td>
      <td><div align="center"><?php echo $_SESSION['qty_chickenburger'] * 7.5; ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Beef Burger</div></td>
      <td><div align="center">10.90</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_beefburger']; ?>&nbsp;</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_beefburger'] * 10.90; ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Chicken Pizza</div></td>
      <td><div align="center">12.90</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_chickenpizza']; ?>&nbsp;</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_chickenpizza'] * 12.90; ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Pepperoni Pizza</div></td>
      <td><div align="center">14.90</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_pepperonipizza']; ?></div></td>
      <td><div align="center"><?php echo $_SESSION['qty_pepperonipizza'] * 14.90; ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Hawaiian Pizza</div></td>
      <td><div align="center">16.50</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_hawaiianpizza']; ?></div></td>
      <td><div align="center"><?php echo $_SESSION['qty_hawaiianpizza'] * 16.50; ?> </div></td>
    </tr>
    <tr>
      <td height="29"><div align="center">Beef Bolognaise Pasta</div></td>
      <td><div align="center">15.50</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_bolognese']; ?></div></td>
      <td><div align="center"><?php echo $_SESSION['qty_bolognese'] * 15.50; ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Chicken Espatada</div></td>
      <td><div align="center">20.50</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_espatada']; ?>&nbsp;</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_espatada'] * 20.50; ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Spicy Oleo Pasta</div></td>
      <td><div align="center">17.20</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_oleo']; ?></div></td>
      <td><div align="center"><?php echo $_SESSION['qty_oleo'] * 17.20; ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Grilled Beef Steak</div></td>
      <td><div align="center">25.90</div></td>
      <td><div align="center"><?php echo $_SESSION['qty_beefsteak']; ?></div></td>
      <td><div align="center"><?php echo $_SESSION['qty_beefsteak'] * 25.90; ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Mexican Chicken</div></td>
      <td><div align="center">20.50</div></td>
      <td><?php echo $_SESSION['qty_mexicanchicken']; ?></td>
      <td><div align="center"><?php echo $_SESSION['qty_mexicanchicken'] * 20.50; ?> </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="355" border="1">
    <tr>
      <td width="171" height="33"><div align="right">Total price:</div></td>
      <td width="168"><div align="left"><?php echo ($_SESSION['qty_beefsteak'] * 25.90) + ( $_SESSION['qty_chickenburger'] * 7.5)+ ( $_SESSION['qty_beefburger'] * 10.90) + ($_SESSION['qty_chickenpizza'] * 12.90) + ($_SESSION['qty_pepperonipizza'] * 14.90) + ( $_SESSION['qty_hawaiianpizza'] * 16.50) +( $_SESSION['qty_bolognese'] * 15.50) + ( $_SESSION['qty_espatada'] * 20.50) + ( $_SESSION['qty_oleo'] * 17.20) + ($_SESSION['qty_beefsteak'] * 25.90) + ( $_SESSION['qty_mexicanchicken'] * 20.50); ?>  </div></td>
    </tr>
  </table>
  <form id="form1" name="form1" method="post" action="">
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><a href="delicious shopping cart.php">Click here to add more!</a></p>
  <a href="Thanks.php">  Click here if you are done!
</a></div>
<p align="center"></p>
</body>
</html>