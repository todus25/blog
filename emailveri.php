<?php
ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "almostfemous@gmail.com");

    $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from =almostfemous@gmail.com";

    $headers = "almostfemous@gmail.com";


    mail("istiaqueahmed2000@gmail.com", "Testing", $message, $headers);
    echo "Check your email now....<BR/>";


?>