<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_delicious_conn = "localhost";
$database_delicious_conn = "ahson";
$username_delicious_conn = "root";
$password_delicious_conn = "";
$delicious_conn = mysql_pconnect($hostname_delicious_conn, $username_delicious_conn, $password_delicious_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>