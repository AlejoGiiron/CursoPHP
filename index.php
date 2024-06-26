<?php
declare(strict_types = 1); // sirve para usar estrictamente los tipos de datos.

const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data($url) {
    $result = file_get_contents($url); // Si solo quieres hacer GET a una API

    $data = json_decode($result, true);

    return $data;

}

$data = get_data(API_URL);

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
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
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