<?php
    // inserire una queryString nel url ?badword='qualsiasiParola'

    $censored = $_GET["badword"];

    $paragraph = "la parola censurata è " . $censored . ", quindi non dovresti leggere la parola " . $censored . "!";

    $finalParagraph = str_replace($censored, '***', $paragraph);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Censored</title>
    </head>
    <body>

        <p> <?php echo $finalParagraph ?> </p>


    </body>
</html>
