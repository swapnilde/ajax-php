<?php

$q = intval($_GET['q']);

$con = mysqli_connect('localhost','mock-user','mock-pass','mock_database');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}else{
  //echo "connected";
}

if($q > 0){
    $sql="SELECT * FROM mock_data WHERE id = '".$q."'";
}else{
    $sql="SELECT * FROM mock_data";
}
//$sql="SELECT * FROM mock_data WHERE id = '".$q."'";


$result = mysqli_query($con,$sql);

echo '<table>';

while($row = $result->fetch_array()){
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['first_name'].'</td>';
    echo '<td>'.$row['last_name'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['ip_address'].'</td>';
    echo '</tr>';
}

echo '</table>';

mysqli_close($con);
