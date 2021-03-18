<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
    <a href="index.php">Home</a> | <a href="view.php">View Products</a> | <a href="logout.php">Logout</a>
    <br/><br/>
    
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
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
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
