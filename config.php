<?php 
define('DBNAME','id20729624_whitehatify');
define('DBUSER','id20729624_whitehatifyuser');
define('DBPASS','Whiteblack098@');
define('DBHOST','localhost');
try {
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Your page is connected with database successfully..";
} catch(PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}
?>