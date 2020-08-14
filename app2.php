<?php

$con = mysqli_connect('localhost','mock-user','mock-pass','mock_database');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}else{
  echo "connected"."<br>";
}


if($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = htmlspecialchars(trim($_POST["first_name"]));
    $last_name = htmlspecialchars(trim($_POST["last_name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $gender = htmlspecialchars(trim($_POST["gender"]));
    $ip_address = htmlspecialchars(trim($_POST["ip_address"]));
      

}



if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($gender) && !empty($ip_address)){
    $sql = "INSERT INTO `mock_data` (`first_name`, `last_name`, `email`, `gender`, `ip_address`) VALUES ('$first_name', '$last_name', '$email', '$gender', '$ip_address')";
}else{
    die("No empty data allowed"."<br>");
}


$result = mysqli_query($con,$sql);

echo "result: ".$result.'<br>';
echo 'mysqli_error: '.mysqli_error($con).'<br>';

mysqli_close($con);
