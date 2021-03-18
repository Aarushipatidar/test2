<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) 
   

include("connection.php");
 
 

$sql = "DELETE FROM blog WHERE id = 1";
 

?>