<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi curriculum</title>
    <style>

        body {
            margin: 40px auto;
            padding: 30px;
            max-width: 700px;
            background-color: #f4f4f4;
            color: #202124;
            font-family: Georgia, serif;
            line-height: 1.6;
        }

        h1 {
            margin-bottom: 35px;
            padding-bottom: 15px;
            border-bottom: 3px solid #202124;
            font-family: Arial, sans-serif;
            font-size: 36px;
        }

        h2 {
            margin-top: 30px;
            margin-bottom: 8px;
            color: #5f6368;
            font-family: Arial, sans-serif;
            font-size: 20px;
            text-transform: uppercase;
        }

        hr {
            border: 0;
            border-top: 1px solid #d9d9d9;
        }
    </style>
</head>
<body>
    <h1>Curriculum Narcis</h1>
    <?php
    //Variable para modificar el idioma de las otras variables
    $idioma = "ro";
    
    //Variables para determinan los estudios que poseeo
    $estudios_ro = "Bună, am studiat informatica timp de șase ani.";
    $estudios_es = "Hola he estudiado informatica durante 6 años";
    $estudios_en = "Hello I have studied computer cience for six years";

    //Variables que guardan los idiomas que hablo
    $texto_idiomas_ro = "Vorbesc spaniolă, engleză și română.";
    $texto_idiomas_es = "Hablo espñol ingles y rumano";
    $texto_idiomas_en = "I can talk in spanish english and romanian";

    //Variables que guardan mi perfil profesional
    $perfil_es = "Estudiante de DAW con base en Java, desarrollo web, bases de datos y administración de sistemas Linux. Busco unas prácticas donde seguir aprendiendo.";
    $perfil_en = "DAW student with a background in Java, web development, databases, and Linux system administration. I am looking for an internship where I can continue learning.";
    $perfil_ro = "Student la programul DAW, cu experiență în Java, dezvoltare web, baze de date și administrarea sistemelor Linux. Caut un stagiu de practică în cadrul căruia să pot continua să învăț.";


    $perfil = "perfil_" . $idioma;
    $estudios = "estudios_" . $idioma;
    $texto_idiomas = "texto_idiomas_" . $idioma;
    ?>
    <h2>Perfil profesional</h2>
    <hr>
    <?php echo $$perfil; ?>
    <hr>
    <h2>Estudios</h2>
    <hr>
    <?php echo $$estudios; ?>
    <h2>Idiomas</h2>
    <hr>
    <?php echo $$texto_idiomas; ?>
    

</body>
</html>