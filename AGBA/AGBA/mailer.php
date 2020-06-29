<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["nombre"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["mensaje"]);
    $tel = trim($_POST["tel"]);
    $sector = trim($_POST["sector"]);
    $asunto = trim($_POST["asunto"]);

    // Check the data.
    if (empty($name) OR empty($message) OR empty ($tel) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.agba.org.ar/index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.

    if($sector == "escuela"){
        $recipient = "agbaescuela@fibertel.com.ar";
    }

    if($sector == "actividades"){
        $recipient = "info@agba.org.ar";
    }

    if($sector == "sac"){
        $recipient = "agba@fibertel.com.ar";
    }
   

    // Set the email subject.
    $subject = "Contacto AGBA Nuevo mensaje de $name";

    // Build the email content.
    $email_content = "Nombre: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Asunto: $asunto\n\n";
    $email_content .= "Mensaje:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code.
    header("Location: http://www.agba.org.ar/index.php?success=1#form");

?>