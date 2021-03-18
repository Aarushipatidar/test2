<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("connection.php");
 
if(isset($_POST['Submit'])) {    
    $blog_title = $_POST['blog_title'];
    $description = $_POST['description'];
    
    $id = $_SESSION['id'];
        
    // checking empty fields
    if(empty($blog_title) || empty($description) ) {                
        if(empty($blog_title)) {
            echo "<font color='red'>blog_title field is empty.</font><br/>";
        }
        
        if(empty($description)) {
            echo "<font color='red'>description field is empty.</font><br/>";
        }
        

        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty) 
            
        //insert data to database    
        $sql =  "INSERT INTO blog(id, blog_title, description) VALUES('id','$blog_title','$description')";
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='view.php'>View Result</a>";
    }
}
?>
</body>
</html>
