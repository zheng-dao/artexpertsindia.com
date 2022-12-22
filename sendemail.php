<?php


$status = false;
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST['fullname']) && $_POST['fullname'] != "" &&        
        !empty($_POST['email']) && $_POST['email'] != "" &&
        !empty($_POST['message']) && $_POST['message'] != "" && 
        isset($_FILES['banner'])
    ) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];        
        $message = $_POST['message'];
        $file_name = $_FILES['banner']['name'];
        $file_tmp = $_FILES['banner']['tmp_name'];

        move_uploaded_file($file_tmp,"uploads/".$file_name); //The folder where you would like your file to be saved

        // if(isset($_FILES['banner'])){
        //     $errors= array();
        //     $file_name = $_FILES['banner']['name'];
        //     $file_size = $_FILES['banner']['size'];
        //     $file_tmp = $_FILES['banner']['tmp_name'];
        //     $file_type = $_FILES['banner']['type'];
        //     $file_ext=strtolower(end(explode('.',$_FILES['banner']['name'])));
            
        //     $expensions= array("jpeg","jpg","png","pdf");
            
        //     if(in_array($file_ext,$expensions)=== false){
        //        $errors[]="extension not allowed, please choose a PDF, JPEG or PNG file.";
        //     }
            
        //     if($file_size > 2097152) {
        //        $errors[]='File size must be excately 2 MB';
        //     }
            
        //     if(empty($errors)==true) {
        //        move_uploaded_file($file_tmp,"uploads/".$file_name); //The folder where you would like your file to be saved
        //        echo "Success";
        //     }else{
        //        print_r($errors);
        //     }
        //  }

        $content = "<div style='height:100px;background-color:#fff'>";
        $content .= "<h2>Full Name : $fullname</h2>";
        $content .= "<h2>Email : $email</h2>";       
        $content .= "<p>Message : $message</p>";
        $content .= "</div>";

        require 'PHPMailer/PHPMailerAutoload.php';
        define("EMAILID", 'info@artexpertsindia.com');
        define("PASSWORD", '?EdMWCEWm$9D');
        $mail = new PHPMailer;
        
        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
        
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.artexpertsindia.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAILID;                 // SMTP username
        $mail->Password = PASSWORD;                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;
        // $mail->SMTPSecure = "tls";                           
        // $mail->Port = 587;
        
        $mail->addAttachment("uploads/".$file_name);
        // for($ct=0;$ct<count($_FILES['banner']['tmp_name']);$ct++)
        // {
        //     $uploadfile = "uploads/".sha1($_FILES['banner']['name'][$ct]);
        //     $filename =$_FILES['banner']['name'][$ct];
        //     if (move_uploaded_file($_FILES['banner']['tmp_name'][$ct], $uploadfile)) {
        //         $mail->addAttachment($uploadfile, $filename);
        //     }

        // }

        $mail->setFrom(EMAILID, 'Mailer');
        $mail->addAddress(EMAILID, ' User'); //Add a recipient

    
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        
        // Set email format to HTML
        $mail->Subject = "Contact form Artexpertsindia.com";
        $mail->Body    = "$content";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
        if(!$mail->send()) {
             $status = false;        
            $message = 'The email message was sent';
        } else {
            $status = true;        
            $message = 'Your Message was submitted successfully!';                                                              
        }
  
    }else{
        $status = false;
        $message = "Please enter your valid Details.";
    }
}
echo json_encode(array("message"=>$message,"status"=>$status));


?>



