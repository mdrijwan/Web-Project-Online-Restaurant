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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rsmenu = 1;
$pageNum_rsmenu = 0;
if (isset($_GET['pageNum_rsmenu'])) {
  $pageNum_rsmenu = $_GET['pageNum_rsmenu'];
}
$startRow_rsmenu = $pageNum_rsmenu * $maxRows_rsmenu;

mysql_select_db($database_delicious_conn, $delicious_conn);
$query_rsmenu = "SELECT * FROM menu";
$query_limit_rsmenu = sprintf("%s LIMIT %d, %d", $query_rsmenu, $startRow_rsmenu, $maxRows_rsmenu);
$rsmenu = mysql_query($query_limit_rsmenu, $delicious_conn) or die(mysql_error());
$row_rsmenu = mysql_fetch_assoc($rsmenu);

if (isset($_GET['totalRows_rsmenu'])) {
  $totalRows_rsmenu = $_GET['totalRows_rsmenu'];
} else {
  $all_rsmenu = mysql_query($query_rsmenu);
  $totalRows_rsmenu = mysql_num_rows($all_rsmenu);
}
$totalPages_rsmenu = ceil($totalRows_rsmenu/$maxRows_rsmenu)-1;

$queryString_rsmenu = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rsmenu") == false && 
        stristr($param, "totalRows_rsmenu") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rsmenu = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rsmenu = sprintf("&totalRows_rsmenu=%d%s", $totalRows_rsmenu, $queryString_rsmenu);
$query_rsmenu = "SELECT * FROM menu";
$rsmenu = mysql_query($query_rsmenu, $delicious_conn) or die(mysql_error());
$row_rsmenu = mysql_fetch_assoc($rsmenu);
$totalRows_rsmenu = mysql_num_rows($rsmenu);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu</title>
</head>

<body>
<div align="center">
  <h1>Update Menu 
  </h1>
  <table width="630" height="130" border="1">
    <tr>
      <td width="73"><div align="center">ID</div></td>
      <td width="94"><div align="center">NAME</div></td>
      <td width="114"><div align="center">CATEGORY</div></td>
      <td width="164"><div align="center">NUTRITION INFORAMTION</div></td>
      <td width="60">&nbsp;</td>
      <td width="85">&nbsp;</td>
    </tr>
    <?php do { ?>
      <tr>
        <td height="50"><?php echo $row_rsmenu['id']; ?></td>
        <td><?php echo $row_rsmenu['name']; ?></td>
        <td><?php echo $row_rsmenu['category']; ?></td>
        <td><?php echo $row_rsmenu['nutrition_info']; ?></td>
        <td><a href="updateform.php?id=<?php echo $row_rsmenu['id']; ?>">UPDATE</a></td>
        <td><a href="delete_record.php?id=<?php echo $row_rsmenu['id']; ?>">DELETE</a></td>
      </tr>
      <?php } while ($row_rsmenu = mysql_fetch_assoc($rsmenu)); ?>
  </table>
<a href="<?php printf("%s?pageNum_rsmenu=%d%s", $currentPage, $totalPages_rsmenu, $queryString_rsmenu); ?>">First</a><a href="<?php printf("%s?pageNum_rsmenu=%d%s", $currentPage, min($totalPages_rsmenu, $pageNum_rsmenu + 1), $queryString_rsmenu); ?>"> Last </a> <a href="<?php printf("%s?pageNum_rsmenu=%d%s", $currentPage, min($totalPages_rsmenu, $pageNum_rsmenu + 1), $queryString_rsmenu); ?>">Next</a> <a href="<?php printf("%s?pageNum_rsmenu=%d%s", $currentPage, max(0, $pageNum_rsmenu - 1), $queryString_rsmenu); ?>">Previous</a></div>
</body>
</html>
<?php
mysql_free_result($rsmenu);
?>
