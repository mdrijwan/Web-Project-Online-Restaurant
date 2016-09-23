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
$query_rsmenu = "SELECT name FROM menu ORDER BY name ASC";
$rsmenu = mysql_query($query_rsmenu, $delicious_conn) or die(mysql_error());
$row_rsmenu = mysql_fetch_assoc($rsmenu);
$totalRows_rsmenu = mysql_num_rows($rsmenu);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<p>Add to cart</p>
<form name="form" id="form">
  <p>Menu:
    <select name="jumpMenu2" id="jumpMenu2" onchange="MM_jumpMenu('parent',this,0)">
      <option value="" <?php if (!(strcmp("", $row_rsmenu['name']))) {echo "selected=\"selected\"";} ?>></option>
      <?php
do {  
?>
      <option value="<?php echo $row_rsmenu['name']?>"<?php if (!(strcmp($row_rsmenu['name'], $row_rsmenu['name']))) {echo "selected=\"selected\"";} ?>><?php echo $row_rsmenu['name']?></option>
      <?php
} while ($row_rsmenu = mysql_fetch_assoc($rsmenu));
  $rows = mysql_num_rows($rsmenu);
  if($rows > 0) {
      mysql_data_seek($rsmenu, 0);
	  $row_rsmenu = mysql_fetch_assoc($rsmenu);
  }
?>
    </select>
  </p>
</form>
</body>
</html>
<?php
mysql_free_result($rsmenu);
?>
