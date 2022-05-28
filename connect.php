<?php
$email = $_post['email'];
$password = $_post['password'];


$con = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die("Error connecting to: .$conn->connect_error");
}else{
    $stmt = $conn->prepare("insert into regstration(email,password) values(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    echo"registration sucessfully.....";
    $stmt->close();
    $conn->close();
}
?>


