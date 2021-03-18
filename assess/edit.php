<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<?php
// including the database connection file
include_once("connection.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $blog_title = $_POST['blog_title'];
    $description = $_POST['description'];
    
    // checking empty fields
    // checking empty fields
    if(empty($blog_title) || empty($description) ) {                
        if(empty($blog_title)) {
            echo "<font color='red'>blog_title field is empty.</font><br/>";
        }
        
        if(empty($description)) {
            echo "<font color='red'>description field is empty.</font><br/>";
        }
                
    } else {    
        //updating the table
        $sql =  "UPDATE blog SET '$id','$blog_title','$description' WHERE id=$id";
        
        
        //redirectig to the display page. In our case, it is view.php
        header("Location: view.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql =  "SELECT * FROM blog WHERE id=$id";
 $result = $conn->query($sql);
  while($res = $result->fetch_assoc())
{
    $id = $res['id'];
    $blog_title = $res['blog_title'];
    $description = $res['description'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a> | <a href="view.php">View Products</a> | <a href="logout.php">Logout</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <tr> 
                    <td>blog_title</td>
                    <td><input type="text" name="blog_title"></td>
                </tr>            
                <tr> 
                    <td>description</td>
                    <td><textarea name="description" rows="5" cols="40"></textarea>
</td>
                </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>


