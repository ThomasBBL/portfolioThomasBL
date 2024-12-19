<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   
    $data = [
        'username' => $name,
        'content' => "Nouveau message reçu :\n\n**Email :** $email\n**Message :** $message"
    ];

  
    $webhookUrl = 'https://discord.com/api/webhooks/1313525531911655436/XSIuIHY6gGQtqkdxjFhMH0mcGq7PXKGtWIwfFZbjjMDWXyR3Qpcjm1ewlSJxVNHmJwR_';

    
    $ch = curl_init($webhookUrl);

   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);

 =
    $response = curl_exec($ch);

    if(curl_errno($ch)) {
        echo 'Erreur cURL : ' . curl_error($ch);
    } else {
        if ($httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE) === 204) {
            echo 'Webhook envoyé avec succès !';
        } else {
            echo 'Erreur lors de l\'envoi : ' . $response;
        }
    }

  
    curl_close($ch);
}
?>
