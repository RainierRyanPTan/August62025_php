<?php
$conn = mysqli_connect("localhost", "root", "", "psits");
if(!$conn){
    die ("wala connect");
}

$id = $_POST['email'] ?? '';
$password = $_POST['password'] ??'';

$sql = "Select * from students Where email = '$email'
adn password = '$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0){
    header ("Location:cong.html");
    exit();
}
else{
    echo "WALA GID YA";
}

mysqli_close($conn);


?>