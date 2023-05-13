<?php
    if($_POST){
        // Les données du formulaire
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        
        // L'adresse e-mail à laquelle vous voulez envoyer le message
        $to = "gravier0610@gmx.fr";
        
        // Sujet de l'e-mail
        $subject = "Nouveau message de contact";

        // Corps du message
        $body = "Nouveau message de contact:\n\n";
        $body .= "Nom: ".$name."\n";
        $body .= "Email: ".$email."\n";
        $body .= "Téléphone: ".$phone."\n";
        $body .= "Message:\n".$message."\n";

        // Entêtes de l'e-mail
        $headers = "From: ".$name." <".$email.">\r\n";
        $headers .= "Reply-To: ".$email."\r\n";
        $headers .= "X-Mailer: PHP/".phpversion();

        // Envoi de l'e-mail
        if(mail($to, $subject, $body, $headers)){
            // Si l'e-mail est envoyé avec succès, afficher un message de succès
            echo "<div class='text-center text-white mb-3'>
                      <div class='fw-bolder'>Message envoyé!</div>
                      Merci de votre confiance
                      <br />
                      <a href='https://startbootstrap.com/solution/contact-forms'></a>
                  </div>";
        } else {
            // Si l'e-mail n'a pas pu être envoyé, afficher un message d'erreur
            echo "<div class='text-center text-white mb-3'>
                      <div class='fw-bolder'>Erreur d'envoi de message!</div>
                      Veuillez réessayer plus tard.
                      <br />
                      <a href='https://startbootstrap.com/solution/contact-forms'></a>
                  </div>";
        }
    }
?>
