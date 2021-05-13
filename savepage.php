<?php   
  
  echo $Name = $_POST['sname'];
  echo $Address = $_POST['saddress'];
  echo $Class = $_POST['class'];
  echo $Phone = $_POST['sphone'];

  $conn=mysqli_connect("localhost","root","","CRUD") or die("connection_faield");
  $sql="INSERT INTO students(Name,Address,Class,Phone) VALUES ('{$Name}','{$Address}','{$Class}','{$Phone}')";
  $result=mysqli_query($conn,$sql) or die("quary_failed");


?>