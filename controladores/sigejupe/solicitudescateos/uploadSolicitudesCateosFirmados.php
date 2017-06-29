<?php

$file = $_FILES["archivo"];
print_r($file);
$uploads_dir = 'solicitudespdf';
if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["archivo"]["tmp_name"];
    $name = $_FILES["archivo"]["name"];
    move_uploaded_file($tmp_name, $uploads_dir . "/" . $name);
}
?>