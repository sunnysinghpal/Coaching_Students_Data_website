<?php include 'header.php'; 
if(isset($_POST['deletebtn'])){
$stu_id=$_POST['sid'];
$conn=mysqli_connect("localhost","root","","CRUD") or die("connection_faield");
$sql="DELETE FROM students WHERE id={$stu_id} ";
$result=mysqli_query($conn,$sql) or die("quary_failed   3");

header("Localhost://http://localhost/CRUD/crud_html/index.php");

mysqli_close($conn);

}
?> 





<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];     ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
