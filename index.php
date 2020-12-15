<?php
    // inserire una queryString nel url ?badword='qualsiasiParola'

    $censored = $_GET["badword"];

    // $paragraph = "la parola censurata è " . $censored . ", quindi non dovresti leggere la parola " . $censored . "!";
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";


    // $finalParagraph = str_replace($censored, '***', $paragraph);

    //per fare in modo che il replace non sia case sensitive posso usare str_ireplace
    //in questo modo se nella query o nel testo la parola combacia ma una hanno maiuscole o minuscole differenti str_ireplace non ne tiene conto
    $finalParagraph = str_ireplace($censored, '***', $paragraph);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Censored</title>
    </head>
    <body>

        <p> <?php echo $finalParagraph ?> </p>

        <!-- la lunghezza del paragrafo originale è data dalla somma dei caratteri e degli spazi.. ovviamente cambia a seconda della parola inserita nella queryString -->
        <p> il paragrafo originale è lungo <?php echo strlen($paragraph); ?> caratteri </p>

    </body>
</html>
