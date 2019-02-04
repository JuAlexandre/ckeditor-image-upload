<?php

if (isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo 'http://localhost:8000/' . $target;
        exit();
    } else{
        echo 'Failed to upload image';
        exit();
    }
}
