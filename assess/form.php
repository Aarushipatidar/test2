<html>
<head>
    <title>From</title>
</head>
 
<body>

    <?php
    include("connection.php");
 
    if(isset($_POST['submit'])) {
        $blog_title = $_POST['blog_title'];
        $description = $_POST['description'];
        
        if($blog_title == "" || $description == "") {
            echo "All fields should be filled. Either one or many fields are empty.";
            echo "<br/>";
        } else {
        
            mysqli_query($conn, "INSERT INTO blog(blog_title, description) VALUES('$blog_title', '$description')")
            or die("Could not execute the insert query.");
            
            echo "Blog description insert successfully";
            echo "<br/>";

            echo "<a href='edit.php'>Edit</a>";
            echo "<br/>";

            echo "<a href='delete.php'>Delete</a>";
        }
    } else {
?>
        <p><font size="+2">new blog</font></p>
        <form name="form1" method="post" action="view.php">
            <table width="75%" border="0">
                
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
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>