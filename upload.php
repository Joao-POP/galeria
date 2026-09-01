<?php

$upload_dir = './photos/';
$upload_file = $upload_dir . basename($_FILES['upload']['name']);

if(!move_uploaded_file($_FILES['upload']['tmp_name'], $upload_file))
{
	error_log('PHP\'s HTTP POST upload mechanism was not used to upload this file.');
}