<?php
include('config.php');

if (isset($_POST['contact-sub'])) {

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $re_email =  $_POST['re_email'];
    $city =  $_POST['city'];
    $subject =  $_POST['subject'];
    $message =  $_POST['message'];
    $enquire_for = implode(",", $_POST['enquire_for']);

    if ($email != $re_email) {
        echo '<script>alert("Email & re-enter email are not same", "", "danger")</script>';
    } else {
        $sal = mysqli_query($con, "INSERT INTO `contact_query`(`enquire_for`, `subject`, `name`, `email`, `re_email`, `city`, `phone`, `message`) VALUES ('" . $enquire_for . "' , '" . $subject . "' , '" . $name . "' ,'" . $email . "' ,'" . $re_email . "' ,'" . $city . "' ,'" . $phone . "' , '" . $message . "')");

        if ($sal) {
   $MESSAGE_BODY = ''; 
    
    
$curdate= date('d-m-Y');
$ToEmail = 'info@bhavyaresources.com';

$EmailSubject = 'Contact Enquiry'; 

$mailheader = "From: info@bhavyaresources.com\r\n"; 
$mailheader .= "Reply-To: muskaanrashujain@gmail.com\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$MESSAGE_BODY .= "Name: ".$_POST["name"].("<br>"); 
$MESSAGE_BODY .= "Email: ".$_POST['email'].("<br>"); 
$MESSAGE_BODY .= "Mobile: ".$_POST['phone'].("<br>"); 
$MESSAGE_BODY .= "City: ".nl2br($_POST['city']).("<br>");
$MESSAGE_BODY .= "Subject: ".nl2br($_POST['subject']).("<br>");
$MESSAGE_BODY .= "Message: ".nl2br($_POST['message']).("<br>");
$MESSAGE_BODY .= "Enquire For: ".nl2br($enquire_for).("<br>");

mail($ToEmail,  $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
 echo  "<script type='text/javascript'>alert(\"Thank You We Will Contact You Soon\")
  location.href='index.php';
  </script>";

}
 else {
            echo '<script>alert("Something went wrong!", "", "danger")</script>';
        }
    }
}
?>