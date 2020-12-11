<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - ex3</title>
</head>

<body>

    <h1>Partie 2 - ex3</h1>

    <p>
        Créer deux variables age et gender. La variable gender peut prendre comme valeur :
            Homme
            Femme

        En fonction de l'âge et du genre afficher la phrase correspondante :
            Vous êtes un homme et vous êtes majeur
            Vous êtes un homme et vous êtes mineur
            Vous êtes une femme et vous êtes majeure
            Vous êtes une femme et vous êtes mineur 

        Gérer tous les cas.         
    </p>

    <?php
        
        // déclaration des variables 
        $age = rand(1,30);
        $array = ['Homme', 'Femme', 'Bot'];
        $keys = array_rand($array, 1);
        $gender = $array[$keys];

        echo 'Votre genre : ' .$gender. '<br>';
        echo 'Votre âge : ' .$age. ' ans<br><br>';

        // Affichage en fonctions de sconditions demandées
        if($gender == 'Homme' AND $age >= 18) {echo 'Vous êtes un homme et vous êtes majeur !!';}
        else if($gender == 'Homme') {echo 'Vous êtes un homme et vous êtes mineur !!';}

        else if($gender == 'Femme' AND $age >= 18) {echo 'Vous êtes une femme et vous êtes majeure !!';}
        else if($gender == 'Femme') {echo 'Vous êtes une femme et vous êtes mineur !!';}

        else {echo 'T\'est un bot ou bien !!!!!';}
           

    ?>

</body>

</html>