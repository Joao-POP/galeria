<?php

$upload_dir = './photos/';
$uploaded_image = $upload_dir . basename($_FILES['image-upload']['name']);

if(!move_uploaded_file($_FILES['image-upload']['tmp_name'], $uploaded_image))
{
	error_log('PHP\'s HTTP POST upload mechanism was not used to upload this file.');
}