<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi curriculum</title>
</head>
<body>
    <h1>Curriculum Narcis</h1>
    <?php
    $idioma = "ro";
    
    $estudios_ro = "Bună, am studiat informatica timp de șase ani.";
    $estudios_es = "Hola he estudiado informatica durante 6 años";
    $estudios_en = "Hello I have studied computer cience for six years";

    $texto_idiomas_ro = "Vorbesc spaniolă, engleză și română.";
    $texto_idiomas_es = "Hablo espñol ingles y rumano";
    $texto_idiomas_en = "I can talk in spanish english and romanian";

    $estudios = "estudios_" . $idioma;
    $texto_idiomas = "texto_idiomas_" . $idioma;
    ?>
    <h2>Estudios</h2>
    <hr>
    <?php echo $$estudios; ?>
    <h2>Idiomas</h2>
    <hr>
    <?php echo $$texto_idiomas; ?>

</body>
</html>