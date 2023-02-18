<?php               

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "tgsprojekt@gmail.com";
    $headers = "Poruka od: " . $mailFrom;
    $txt = "Dobili ste poruku od " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("location: ../contact.php?messagesent");
    exit();
}