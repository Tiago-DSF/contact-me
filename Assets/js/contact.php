<?php
header('Content-Type: application/json');
// Você pode proteger este arquivo com autenticação, se desejar
$contact = [
    'whatsapp' => 'https://wa.me/qr/45F3C6CUOLV3O1',
    'email' => 'tiagosantosf6@gmail.com',
    'instagram' => 'https://www.instagram.com/tiago.dsf__?igsh=MTlkOXh1d3ptbTExMQ==',
    'linkedin' => 'https://www.linkedin.com/in/tiago-ferreira-dsf?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'
];
echo json_encode($contact);
