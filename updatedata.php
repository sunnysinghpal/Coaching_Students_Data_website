 <?php  

$stu_id=$_POST['sid'];
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['Class'];
$stu_phone=$_POST['sphone'];


$conn=mysqli_connect("localhost","root","","CRUD") or die("connection_faield");
$sql="UPDATE students SET Name='{$stu_name}',Address='{$stu_address}',Class='{$stu_class}',Phone='{$stu_phone}' WHERE id={$stu_id}";
$result=mysqli_query($conn,$sql) or die("quary_failed   3");

?> 