<?php
//Form validation and required
//define variables and set to empty values
$lastname = $firstname = $email = $phone = $subject = $message = "";
$lastnameErr = $firstnameE = $emailErr = $phoneErr = $subjectErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Vous n'avez pas indiqué votre nom";
    } else {
        $lastname = test_input($_POST["lastname"]);
    }


    if (empty($_POST["firstname"])) {
        $firstnameErr = "Vous n'avez pas indiqué votre prénom";
    } else {
        $firstname = test_input($_POST["firstname"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email invalide";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Donnée invalide";
    }

    $phone = test_input($_POST["phone"]);

    if (empty($_POST["subject"])) {
        $subjectErr = "Vous n'avez pas indiqué l'objet de votre email";
    } else {
        $subject = test_input($_POST["subject"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "Vous n'avez pas indiqué votre message";
    } else {
        $message = test_input($_POST["message"]);
    }
}
var_dump($emailErr);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


echo "<div>Merci " . $firstname . " " . $lastname . " de nous avoir contacté au sujet d'une " . $subject . ".<br>" . PHP_EOL . "Un de nos conseillers vous contactera soit à l’adresse " . $email . " ou par téléphone au " . $phone . " dans les plus brefs délais pour traiter votre demande.</div><br>" . PHP_EOL . "Votre message: <br>" . PHP_EOL . $message;
