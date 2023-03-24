<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn= mysqli_connect("localhost","root","","crud") or die("Connection Failed!");
    $sql= "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result=mysqli_query($conn, $sql) or die("Query Unsussessful.");


    if(mysqli_num_rows($result) > 0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row =mysqli_fetch_assoc($result)){
            ?>
            <tr>
               <?php /* <td>1</td>
                <td>Ramesh</td>
                <td>Delhi</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Suresh</td>
                <td>Punjab</td>
                <td>BCOM</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Suresh</td>
                <td>Haryana</td>
                <td>BSC</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Krishna</td>
                <td>Gujrat</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr> */?>
                <td><?php echo $row['sid'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname'];?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
    <?php }else{
        echo "<h2> No record fount</h2>";
    }
    mysqli_close($conn);
     ?>
</div>
</div>
</body>
</html>
