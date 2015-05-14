<?php
 
        //mail variables
        $contact_name = $_REQUEST['contact_name'];
        $contact_email = $_REQUEST['contact_email'];
        $contact_phone = $_REQUEST['contact_phone'];
        $uploaded_file = $_REQUEST['uploaded_file'];
        $contact_method = $_REQUEST['contact_method'];
        $contact_job = $_REQUEST['contact_job'];
        // $img_data = file_get_contents("Tulips.jpg");
        $upload_folder = './uploads/'; 

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





        //email send information
        $to_email = "peteracurewitz@gmail.com";
        $Subject = "Contact Us";
  
        //email headers
        //$Headers = "From: ".$contact_name." <".$contact_email.">\r\n";
        $Headers = "From: Contact Us<".$contact_email.">\r\n";
 
        $html = '<img src="http://pcurewitz.com/.$path_of_uploaded_file.">';
        //email body
        $mail_body = "
 

        Contact Name: ".$contact_name."
        Contact email: ".$contact_email."
        Contact Phone: ".$contact_phone."
        Picture Name: ".$name_of_uploaded_file."
        Image: http://pcurewitz.com".$path_of_uploaded_file."
        Preffered Method of Contact: ".$contact_method."
        Job Description : ".$contact_job;

        // $uploaded_file;
        // include($img_data);
        //send the email
        

         mail($to_email, $Subject, $mail_body, $Headers);
 
 
        //show thank you page

        print "<META http-equiv='REFRESH' content='0;URL=submit.php'>";
 
 
?>
