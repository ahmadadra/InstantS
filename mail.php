<?php 
if(isset($_POST['submit'])){
    $to ="ahmadadra28@gmail.com" ; // this is our Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];

    $message ="Name of the sender is: " . "\nThe message is:\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
}
    
?>