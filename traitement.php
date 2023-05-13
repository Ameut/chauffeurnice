<?php
if(isset($_POST['email'])) {
 
    // Adresse email du destinataire
    $email_to = "gravier0610@gmx.fr";
    $email_subject = "Nouveau message depuis le formulaire de contact du site";
 
    // Fonction pour gérer les erreurs
    function died($error) {
        echo "Nous sommes désolés, mais il y a des erreurs dans le formulaire que vous avez soumis. ";
        echo "Ces erreurs sont les suivantes :<br /><br />";
        echo $error."<br /><br />";
        echo "Merci de corriger ces erreurs.<br /><br />";
        die();
    }
 
    // Validation des champs requis
    if(!isset($_POST['nom']) ||
        !isset($_POST['prenom']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['email']) ||
         !isset($_POST['date']) ||
        !isset($_POST['message']) ||
        !isset($_POST['destination'])) {
        died('Nous sommes désolés, mais il semble y avoir un problème avec le formulaire que vous avez soumis.');       
    }
 
    $nom = $_POST['nom']; // champ nom
    $prenom = $_POST['prenom']; // champ prénom
    $telephone = $_POST['telephone']; // champ téléphone
    $email = $_POST['email']; // champ email
     $email = $_POST['date']; // champ date
    $message = $_POST['message']; // champ message
    $destination = $_POST['destination']; // champ destination
 
    // Construction du corps du message
    $email_message = "Détails du formulaire de contact :\n\n";
    $email_message .= "Nom : ".$nom."\n";
    $email_message .= "Prénom : ".$prenom."\n";
    $email_message .= "Téléphone : ".$telephone."\n";
    $email_message .= "Email : ".$email."\n";
    $email_message .= "Date : ".$date."\n";
    $email_message .= "Destination : ".$destination."\n";
    $email_message .= "Message : ".$message."\n\n";
 
    // Construction de l'en-tête du mail
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
    // Envoi du mail
    if(mail($email_to, $email_subject, $email_message, $headers)) {
        echo "Votre message a bien été envoyé.";
    } else {
        echo "Une erreur est survenue lors de l'envoi de votre message.";
    }
}
?>
