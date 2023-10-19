<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        $tab = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

        foreach ($tab as $nb) {
            //var_dump($nb % 2);
            if ($nb % 2 == 0) { 
        ?>
                <li><?= $nb ?> : pair</li>
            <?php } else { ?>
                <li><?= $nb ?> : impair</li>
        <?php }
        }
        ?>
    </ul>
</body>

</html>