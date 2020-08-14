<?php

$q = intval($_GET['q']);

$con = mysqli_connect('localhost','mock-user','mock-pass','mock_database');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}else{
  echo "connected"."<br>";
}

if($q > 0){
    $sql="SELECT * FROM mock_data WHERE id = '".$q."'";
}else{
    $sql="SELECT * FROM mock_data";
}



$result = mysqli_query($con,$sql);

$jsonUser = array();

echo '<table>';


while($row =mysqli_fetch_assoc($result)){
    
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['first_name'].'</td>';
    echo '<td>'.$row['last_name'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['ip_address'].'</td>';
    echo '</tr>';
    
    
    $jsonUser = $row;
    echo json_encode($jsonUser);
    
}

echo '</table>';

mysqli_close($con);

?>
