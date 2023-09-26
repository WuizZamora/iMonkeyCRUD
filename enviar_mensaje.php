<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $mensaje = $_POST["mensaje"];

    // Envía una solicitud HTTP a tu servidor Node.js para enviar el mensaje a WhatsApp
    $url = 'http://localhost:3000/enviar-mensaje'; // Reemplaza con la URL de tu servidor Node.js
    $data = ['numero' => $numero, 'mensaje' => $mensaje];
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Maneja la respuesta de tu servidor Node.js si es necesario
    if ($result === false) {
        echo "Error al enviar el mensaje a WhatsApp.";
    } else {
        echo "Mensaje enviado a WhatsApp.";
    }
}
?>
