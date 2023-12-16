<?php

$recipientEmailAddress = $_GET['recipientEmailAddress'];
$recipientName = $_GET['recipientName'];
$fromEmailAddress = $_GET['fromEmailAddress'];
$contactNumber = $_GET['contactNumber'];
$fullName = $_GET['fullName'];

$to = 'recipient@example.com';
$subject = 'Inquiry Regarding Contact Information';
$message = "
Dear $recipientName,

I hope this message finds you well. My name is $fullName, and I am an alumnus of UIU. I am interested in reaching out to you and would appreciate it if you could provide me with your contact details.

If possible, please share your phone number or any other contact address where I can reach you. I value your assistance and look forward to connecting with you.

Thank you for your time, and I appreciate your prompt response.

Best regards,

$fullName
$fromEmailAddress
$contactNumber";

$headers = 'From: nourose@uiualumni.com' . "\r\n" .
    "Reply-To: $fromEmailAddress" . "\r\n";

// Send the email using the mail function
mail($to, $subject, $message, $headers);

echo "<script>alert('Successfully Sent Your Contact Request.')</script>";
echo"  <script>location.assign('../frontend/contactList.php')</script>";




