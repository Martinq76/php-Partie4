<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
    </head>

    <body>


        <?php
        function hello($lastname, $firstname, $age) {
            return 'Bonjour '.$lastname.' '.$firstname.', tu as '.$age.' ans.';
        }
        
        echo hello();
        ?>
    </body>
</html>