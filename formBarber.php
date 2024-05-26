<?php

// Includi le librerie PHPMailer
require __DIR__ . '/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati dal form
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $servizio = $_POST['servizio'];
    $giornata = $_POST['giornata'];

    // Formattazione del corpo dell'email
    $emailContent = '
    <div style="background-color:rgb(10,10,10); color: white; padding: 20px;">
        <h2 style="font-family: \'Poppins\', sans-serif;">Dati del Form - Prenotazione</h2>
        <div style="margin-top: 20px;">
            <p style="font-family: \'Poppins\', sans-serif;"><strong>Nome:</strong> ' . $name . '</p>
            <p style="font-family: \'Poppins\', sans-serif;"><strong>Cognome:</strong> ' . $surname . '</p>
            <p style="font-family: \'Poppins\', sans-serif;"><strong>Email:</strong> ' . $email . '</p>
            <p style="font-family: \'Poppins\', sans-serif;"><strong>Telefono:</strong> ' . $telefono . '</p>
            <p style="font-family: \'Poppins\', sans-serif;"><strong>Servizio:</strong> ' . $servizio . '</p>
            <p style="font-family: \'Poppins\', sans-serif;"><strong>Giornata:</strong> ' . $giornata . '</p>
        </div>
    </div>';

    // Configurazione dell'email
    $mail = new PHPMailer(true);
    try {
        // Configurazione del server SMTP e altri dettagli dell'email
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lasthanma@gmail.com';
        $mail->Password = 'mtnjtvvvjdtjbnap';
        $mail->SMTPSecure = 'ssl'; // Usa 'tls' se richiesto
        $mail->Port = 465; // Porta SMTP di Gmail (può essere 587 per TLS)

        // Impostazione dei dettagli dell'email
        $mail->setFrom('lasthanma@gmail.com', 'Tony & Remo');
        $mail->addAddress('clinton10e@gmail.com');
        $mail->Subject = 'Dati del Form - Prenotazione';

        // Aggiunta del corpo dell'email
        $mail->isHTML(true);
        $mail->Body = $emailContent;

        // Invio dell'email
        $mail->send();
        echo 'Email inviata con successo!';
    } catch (Exception $e) {
        echo 'Errore durante l\'invio dell\'email: ', $mail->ErrorInfo;
    }
}
