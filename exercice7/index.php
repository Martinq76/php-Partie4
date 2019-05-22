<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
    </head>

    <body>


        <?php
        function myFunction($age, $gender) {
            if ($age >= 18 && $gender == 'Homme') {
                $result = 'Vous êtes un homme et vous êtes majeur';
            } elseif ($age < 18 && $gender == 'Homme') {
                $result = 'Vous êtes un homme et vous êtes mineur';
            } elseif ($age >= 18 && $gender == 'Femme') {
                $result = 'Vous êtes une femme et vous êtes majeur';
            } else {
                $result = 'Vous êtes une femme et vous êtes mineur';
            }
            return $result;
        }
        echo myFunction(17, Homme);
        ?>
    </body>
</html>