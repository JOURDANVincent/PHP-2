<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - ex5</title>
</head>

<body>

    <h1>Partie 2 - ex5</h1>

    <p>
    Traduire ce code avec des if et des else : 

    echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
      
    </p>

    <?php
        
        // déclaration des variables 
        $array = ['Homme', 'Femme', 'Bot'];
        $keys = array_rand($array, 1);
        $gender = $array[$keys];
        
        // Affichage du genre
        echo $gender. '<br>';

        // Affichage en fonctions des conditions demandées
        if($gender != 'Homme'){echo 'C\'est une développeuse !!!';
        } else {echo 'C\'est un développeur !!!';}       

    ?>

</body>

</html>