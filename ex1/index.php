<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - ex1</title>
</head>

<body>

    <h1>Partie 2 - ex1</h1>

    <p>
        Créer une variable age et l'initialiser avec une valeur.  
        Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.      
    </p>

    <?php
        
        // déclaration des variables 
        $age = rand(1,130);

        // conditions et affichage
        if($age >= 18) {echo "Vous avez {$age} ans, vous êtes majeur !!";}
        else {echo "Vous avez {$age} ans, vous êtes majeur !!";}

    ?>

</body>

</html>