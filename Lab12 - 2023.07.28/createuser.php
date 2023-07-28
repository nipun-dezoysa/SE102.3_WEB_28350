<?php
$servername = "localhost";
$user = "root";
$pass = '';
$db = "university";
$conn = mysqli_connect($servername,$user,$pass,$db);
if(!$conn){
    die ("Connection faild: ".mysqli_connect_error());
}else{
    echo "Connection Successful";
}

$id = $_POST["id"];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = "INSERT INTO students VALUES(".$id.",'".$name."','".$email."','".$password."');";
if($conn->query($query)===true){
    echo "New User created successfully";
}else{
    echo "Error: ".$query."<br>".$conn->error;
}
?>