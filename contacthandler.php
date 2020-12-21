
<?php

    $name = $_POST['name'];
    $vemail = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'contact_us@endtime-entrepreneurs.github.io';

    $email_subject = "Contact Up form submission";

    $email_body = "User Name: $name.\n".
        "User Email: $vemail.\n".
        "User Message: $message.\n";

    $to = "J.eisenhardt8@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $vemail \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");


    ?>