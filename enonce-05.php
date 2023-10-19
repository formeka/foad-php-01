<?php
$persons = json_decode(file_get_contents('https://randomuser.me/api/?results=20'), true);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .user {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
            grid-gap: 1rem;
            padding: 1rem;
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        .oneuser {
            border: solid 1px black;
            height: 15rem;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .surligne {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="user">
        <?php foreach ($persons['results'] as $person) {
        ?>
            <div class="oneuser">
                <h4 <?=$person['gender'] == 'female' ? 'class="surligne"' : '' ?>  >
                <?= $person['name']['first'] ?> <?= $person['name']['last'] ?>
                </h4>
                <img src="<?= $person['picture']['large'] ?>">
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>