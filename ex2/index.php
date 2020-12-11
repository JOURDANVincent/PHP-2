<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - ex2</title>
</head>

<body>

    <h1>Partie 2 - ex2</h1>

    <p>
        Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  
        Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.     
    </p>

    <?php
        
        // déclaration des variables 
        $isEasy = (bool)rand(0,1);

        if($isEasy == true) {echo 'C\'est facile !!';}
        else {echo 'C\'est difficle !!';}

        // 2 eme manière
        if($isEasy) {echo 'C\'est facile !!';}
        else {echo 'C\'est difficle !!';}

        // 3eme technique
        $result = ($isEasy == false) ? 'C\'est difficile !!' : 'C\'est facile !!';
        echo $result;

    ?>

</body>

</html>