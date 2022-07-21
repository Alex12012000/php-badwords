<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $paragraph = 'Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.';
        $bWord = $_GET['parola'];
        $censuredStr = str_replace($bWord, '***', $paragraph);
    ?>

    <div> <?php echo $paragraph; ?></div>
    <div>Lunghezza <?php echo strlen($paragraph);?></div>

    <div><?php echo $censuredStr; ?></div>
    <div>Lunghezza <?php echo strlen($censuredStr); ?></div>


</body>
</html>