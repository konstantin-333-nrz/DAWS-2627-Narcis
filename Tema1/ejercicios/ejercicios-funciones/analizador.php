<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador</title>
    <style>
      * {
        box-sizing: border-box;
       }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 24px;
            display: grid;
            place-items: center;
            background: #f1f5f9;
            color: #1e293b;
            font-family: Arial, sans-serif;
        }

        form {
            width: min(100%, 420px);
            padding: 32px;
            display: flex;
            flex-direction: column;
            gap: 16px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgb(15 23 42 / 10%);
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font: inherit;
        }

        input[type="text"]:focus {
            outline: 2px solid #93c5fd;
            border-color: #2563eb;
        }

        button {
            padding: 12px;
            border: 0;
            border-radius: 8px;
            background: #2563eb;
            color: #fff;
            font: inherit;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
    }
    </style>
</head>
<body>
   <form method = "post">

   <input type="text" placeholder="Introduce tu frase" method="post" name="frase">
   <button type="submit">Analizar</button> 
   <?php include("analizadorLogica.php");?>
    
    </form>
</body>
</html>