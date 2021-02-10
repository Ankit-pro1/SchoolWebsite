<?php 
$con = mysqli_connect('localhost','root') ;
if($con){
    echo "Connection Successfull";
}else{
    echo "Connect Not Found";
}
mysqli_select_db($con, 'userdata');
$user =  $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$sql = " INSERT INTO userinfo (name, email, phone_no, comment)
values('$user', '$email', '$phone', '$comment') ";

mysqli_query($con, $sql);

header('location:index.php');
?>