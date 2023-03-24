<?php
//echo "Delete Page";
 $stu_id = $_GET['id'];

    include 'config.php';
    $sql= "DELETE FROM student WHERE sid={$stu_id}";
    $result=mysqli_query($conn, $sql) or die("Query Unsussessful.");
     
    header("Location: http://localhost/crud/crud_html/index.php");

    mysqli_close($conn);

     

?>