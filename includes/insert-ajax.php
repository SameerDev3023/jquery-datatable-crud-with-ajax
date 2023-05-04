<?php
include 'connection.php';

// Get form data
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userNumber = $_POST['userNumber'];
$userCountry = $_POST['userCountry'];
$userState = $_POST['userState'];
$userCity = $_POST['userCity'];
$userPass = $_POST['userPass'];

// Handle image upload
    $file = $_FILES['userImage'];
    $fileName = uniqid() . '_' . $file['name'];
    $filePath = '../assests/uploads/' . $fileName;
    if(move_uploaded_file($file['tmp_name'], $filePath)) {
        $userImage = $filePath;
    }

    

// Insert form data into database
$query = "INSERT INTO `users` (`name`, `email`, `phone`, `country`, `state`, `city`, `image`, `pass`) VALUES (
    '$userName',
    '$userEmail',
    '$userNumber',
    '$userCountry',
    '$userState',
    '$userCity',
    '$fileName',
    '$userPass'
)";

$result = mysqli_query($conn, $query);

if($result) {
    echo 'Data inserted successfully';
} else {
    echo 'Error inserting data: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
