<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<?php
//including the database connection file
include_once("connection.php");
 
//fetching data in descending order (lastest entry first)
$sql =  "SELECT * from blog where id=".$_SESSION['id']." ORDER BY id DESC";
$result = $conn->query($sql);
?>
 
<html>
<head>
    <title>Homepage</title>
</head>
 
<body>
<a href="login.php">Home</a> | <a href="add.html">Add New Data</a> | <a href="logout.php">Logout</a>
<br/><br/>
    
<table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        <td>id</td>
        <td>blog_title</td>
        <td>description</td>
        
    </tr>
    <?php
     while($res = $result->fetch_assoc()) { 
       
        echo "<tr>";
        echo "<td>".$res['id']."</td>";
        echo "<td>".$res['blog_title']."</td>";
        echo "<td>".$res['description']."</td>";    
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
</table>    
</body>
</html>
