
<?php

    $name = "Alejo";
    $isDev = true;
    $age = 28;

    var_dump($name);
    var_dump($isDev);
    var_dump($age);

    $isOld = $age > 30;
    
    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-png-transparent.png');

    $outputAge = match (true){
        $age < 2 => "Eres un bebe, $name",
        $age < 10 => "Eres un ni;o, $name",
        $age < 18 => "Eres un adolescente, $name",
        $age === 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un joven, $name"
    };


    $bestLanguages = ["PHP", "JavaScript", "Python", "Java "];
    
?>

<ul>
    <?php foreach ($bestLanguages as $language): ?>
        <li><?= $language ?></li>
    <?php endforeach ?>

</ul>

<h2><?= $outputAge ?></h2>

<img src="<?= LOGO_URL ?> " alt="PHP Logo" width="200">

<h1>
       
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
