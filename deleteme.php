<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
$conn = mysqli_connect("localhost", "root", "", "dbstudents");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)

        $sid = $_GET['sid'];
    
         
        // Performing delete query execution

        $sql = "DELETE FROM tblstudents  WHERE sid='$sid'";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data deteled from the database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$firstname\n $lastname\n "
                . "$sid\n ");
        } else{
 //           echo "ERROR: Hush! Sorry $sql. "
 //               . mysqli_error($conn);
            header("Location: index.php");
            die();
        }
         
        // Close connection
        mysqli_close($conn);
        header("Location: index.php");
        die();
        ?>
    </center>
</body>
 
</html>