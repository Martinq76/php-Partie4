<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
    </head>

    <body>


        <?php
        function returnNumber($number1, $number2) {
            if ($number1 > $number2) {
                $result = 'Le premier nombre est plus grand';
            } elseif ($number1 < $number2) {
                $result = 'Le premier nombre est plus petit';
            } else {
                $result = 'Les deux nombres sont identiques';
            }
            return $result;
        }
        
        echo returnNumber(10,10);
        ?>
    </body>
</html>