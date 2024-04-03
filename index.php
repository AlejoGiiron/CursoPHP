<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializar una nueva sesion de cURL; ch = cURLD handle

$ch = curl_init(API_URL);

//Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Ejecutar la peticion y guardamos el resultado

$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);


?>

<head>
  <meta charset="UTF-8" /> 
  <title>La proxima pelicula de Marvel</title>
  <meta name="description" content="La proxima pelicula de Marvel" />
  <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>  
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width ="300" alt="Poster de <?= $data["title"]; ?>"
        style="border-radius: 16px" />
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h3>
        <p>Fecha de estreno: <?= $data["rekease_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<style>

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>