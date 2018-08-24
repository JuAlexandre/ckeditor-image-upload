<?php

//print_r($_FILES['image']);

// if 'upload image' button is clicked
if (isset($_FILES['image'])) {
    // Get image name
    $image = $_FILES['image']['name'];

    // image file directory
    $target = "images/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "http://localhost:8000/" . $target;
        exit();
    }else{
        echo "Failed to upload image";
        exit();
    }
}
