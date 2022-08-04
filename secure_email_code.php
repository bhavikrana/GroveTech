<?php
// if(isset($_POST['submit'])) {
    $name = $_POST['fname']; //getting customer name
    $fromEmail = $_POST['email']; //getting customer email
    $phone = $_POST['phone']; //getting customer Phome number
    $lname = $_POST['lname']; //getting subject line from client
    $birthdate = $_POST['message'];
    // print_r($_FILES);
    // exit;
    
    if(!empty($_FILES["attachment"]["name"])){
        // File path config
        $targetDir = "uploads/";
        $fileName = basename($_FILES["attachment"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        
        // Allow certain file formats
        $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
        if(in_array($fileType, $allowTypes)){
            // Upload file to the server
            if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                $uploadedFile = $targetFilePath;
            }else{
                $uploadStatus = 0;
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $uploadStatus = 0;
            $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
        }
    }
    
    
    $message = "Hello HR<br/>";
    $message .= "<br/>";
    $message .= "New Resume Arrives<br/>";
    $message .= "<br/>";
    $message .= "<b>Name:</b>\n".$name."\n".$lname."<br/>";
    $message .= "<b>Phone:</b>\n".$phone."<br/>";
    $message .= "<b>Email:</b>\n".$fromEmail."<br/>";
    if($birthdate){
        $message .= "<b>Message:</b>\n".$birthdate."<br/>";
    }
    

    $to = $fromEmail;
    $subject = "Contact us Application";
    
    $header = "From:hr@grovetech.in \r\n";
    // $header .= "Cc:jariwala.ketan8@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $message2 = "Hello ".$name."\n".$lname.",<br/>";
    $message2 .= "<br/>";
    $message2 .= "Thank you for contacting us. We will get back to you soon.<br/>";
    $message2 .= "<br/>";
    $message2 .= "Regards,<br/>";
    $message2 .= "GroveTech Solutions<br/>";
    $message2 .= "+918980803350";
    
    
    $to2 = "hr@grovetech.in";
    $subject2 = "Apply For Job";
    $header2 = "From:".$fromEmail." \r\n";
    $header2 .= "Cc:jariwala.ketan8@gmail.com \r\n";
    $header2 .= "MIME-Version: 1.0\r\n";
    $header2 .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message2,$header);
    $retval = mail ($to2,$subject2,$message,$header2);
    
    if( $retval == true ) {
      $msg =  "Message sent successfully...";
    }else {
      $msg =   "Message could not be sent...";
    }
    return $msg;
    
  //  }
?>