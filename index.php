<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
     <?php
     $conn=mysqli_connect("localhost","root","","CRUD") or die("connection_faield");
     $sql="SELECT * FROM students JOIN courseid WHERE students.Class=courseid.cid";
     $result=mysqli_query($conn,$sql) or die("quary_failed");
   
      
     ?>

        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        </thead>
        <?php
        while($row=mysqli_fetch_assoc($result)){
            ?>
        <tbody  >    
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['Class']; ?></td>
                <td><?php echo $row['Phone']; ?></td>
                
               
            </tr>
            
        </tbody>
        <?php } ?>
        
    </table>
</div>
</div>
</body>
</html>
