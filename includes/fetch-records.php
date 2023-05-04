<?php
header('Content-Type: application/json');
include 'connection.php';

$query = "SELECT * FROM `users`";
$result = mysqli_query($conn,$query);
$data = array();
if(mysqli_num_rows($result)>0){
    while($data2 = mysqli_fetch_assoc($result)){
        $data[] = $data2;
    }
}
echo json_encode(array("data" => $data)); 
?>