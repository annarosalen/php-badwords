<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: purple;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }        
    </style>
</head>
<body>
    <h1>

        <?php

           echo $testo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem hic nostrum ipsa in aliquid, pariatur laudantium facilis suscipit quod optio qui alias dolores culpa ea sed? A labore voluptas mollitia!';

           
        ?>
    </h1>

    <h2>
        Lunghezza della stringa

        <?php
            echo $lunghezza = strlen($testo);
        ?>
    
    </h2>

    <h3>

     La badword inserita è:

        <?php 
            $badword = $_GET['badword']; 
             echo $badword; 
        ?> 

	</h3>

    <h2>
        
        <?php 
           echo $new = str_replace($badword, "***", $testo);
        ?>

    </h2>

</body>
</html>