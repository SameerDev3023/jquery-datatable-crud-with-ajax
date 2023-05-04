<?php
include 'connection.php';
$userId = $_POST['userId'];
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPhone = $_POST['userNumber'];
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

// Update form data in the database
$query = "UPDATE `users` SET
    `image` = '$fileName',
    `name` = '$userName',
    `email` = '$userEmail',
    `phone` = '$userPhone',
    `country` = '$userCountry',
    `state` = '$userState',
    `city` = '$userCity',
    `pass` = '$userPass'
    WHERE `id` = '$userId'";


$result = mysqli_query($conn, $query);
if($result) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
