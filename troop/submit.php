<?php

        //mail variables
        $uploaded_file = $_REQUEST['uploaded_file'];
        $upload_folder = '../uploads/';

$name_of_uploaded_file =
    basename($_FILES['uploaded_file']['name']);

//get the file extension of the file
$type_of_uploaded_file =
    substr($name_of_uploaded_file,
    strrpos($name_of_uploaded_file, '.') + 1);



$size_of_uploaded_file =
    $_FILES["uploaded_file"]["size"]/1024;//size in KBs
    //copy the temp. uploaded file to uploads folder
$path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
$tmp_path = $_FILES["uploaded_file"]["tmp_name"];

if(is_uploaded_file($tmp_path))
{
  if(!copy($tmp_path,$path_of_uploaded_file))
  {
    $errors .= '\n error while copying the uploaded file';
  }
}




        //show thank you page

        print "<META http-equiv='REFRESH' content='0;URL=thankyou.html'>";



?>
