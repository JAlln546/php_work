<?php 

define('BASEPATH', dirname(__FILE__));

$name = '';
$photo = null;

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_FILES['profile_photo'])){
    $photoPath = '/media/'.basename($_FILES['profile_photo']['name']);
    $photoFullPath = BASEPATH.$photoPath;
    $photo = BASEPATH.'/media/'.basename($_FILES['profile_photo']['name']);
    // Example: /home/ec2-user/environment/forms/media/IMG001.jpg
    
    if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $photo)){
        // yay!
    } else {
        $photoPath = null;
        die('move failed.');
    }
}

header('Location: /my_profile.php?name='.
$name.'&photo='.$photoPath);