<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">

    <title>Cards maker</title>
</head>

<style>
    :root {
        --letter-width: 210mm;
        --letter-height: 297mm;
        --cards-gap: 1.5mm;

        --card-x-padding: 3mm;
        --card-y-padding: 3mm;
        --card-gap: 1.5mm;
        --card-gap-sm: .75mm;

        --x-count: <?= $xCount = 3 ?>;
        --y-count: <?= $yCount = 3 ?>;
    }
</style>

<?php
require_once 'process_cards.php';

$cardsJSON = file_get_contents("./db/cards.json");
$allData = json_decode($cardsJSON, true);
$cards = $allData["cards"];
$classesCards = $allData["classesCard"];

if (false) {
    echo '<pre>';
    var_dump($allData);
}


$allClasses = [
    "Бард",
    "Волшебник",
    "Друид",
    "Жрец",
    "Жрец Бури",
    "Жрец Войны",
    "Жрец Жизни",
    "Жрец Знания",
    "Жрец Обмана",
    "Жрец Природы",
    "Жрец Света",
    "Колдун",
    "Паладин",
    "Следопыт",
    "Чародей",
    "Изобретатель"
];
$classes = ["Изобретатель"];
$minLevel = 0;
$maxLevel = 1;
$onlyWithUpcast = false;
$cards_show = [];

for ($j = $minLevel; $j <= $maxLevel; $j++) {
    $cards_show = array_merge($cards_show, $cards[$j]);
}

$cards_show = array_values(array_filter($cards_show, function ($card) {
    global $onlyWithUpcast, $classesCards, $classes;
    $filterByClass = !empty($classes);

    if ($filterByClass)
        foreach ($classes as $class)
            $filterByClass = $filterByClass && in_array($card["name"], $classesCards[$class]);

    return !($onlyWithUpcast && empty($card['hightlevel']))
        && ($filterByClass);
}));

$cardsCount = count($cards_show);
$pagesCount = $cardsCount / ($xCount * $yCount);


//echo "<pre>";
//print_r($cards_show);
// echo $cardsCount;
?>

<body>
<div class="cards">
    <?php
    $i = 0;
    for ($p = 0; $p < $pagesCount; $p++) {
        echo '<div class="cards__page">';
        for ($r = 0; $r < $yCount; $r++) {
            echo '<div class="cards__row">';
            for ($c = 0; $c < $xCount; $c++, $i++) {
                if ($i >= $cardsCount) break;
                $card = $cards_show[$i];
                ?>
                <div class="card" id="<?= $i ?>">
                    <header class="card__header">
                        <?= $card['name'] ?>
                    </header>

                    <div class="card__stats">
                        <div class="card__stat">
                            <div class="card__stat-title">Время накладывания</div>
                            <div><?= $card['time'] ?></div>
                        </div>

                        <div class="card__stat">
                            <div class="card__stat-title">Дистанция</div>
                            <div><?= $card['range'] ?></div>
                        </div>
                        <div class="card__stat">
                            <div class="card__stat-title">Компоненты</div>
                            <div>
                                <?php foreach ($card['components'] as $component) { ?>
                                    <span><?= $component ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="card__stat">
                            <div class="card__stat-title">Длительность</div>
                            <div><?= $card['duration'] ?></div>
                        </div>
                    </div>

                    <div class="card__description">
                        <span>
                        <?php foreach ($card['text'] as $text) { ?>
                            <span><?= $text ?></span>
                        <?php } ?>
                        </span>
                    </div>

                    <?php if (!empty($card['hightlevel'])) { ?>
                        <div class="card__upcast">
                            <?php foreach ($card['hightlevel'] as $hightlevel) { ?>
                                <span><?= $hightlevel ?></span>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <footer class="card__footer">
                        <div><?= $card['class'] ?></div>
                        <div class="card__level"><?= $card['level'] ?></div>
                        <div><?= $card['type'] ?></div>
                    </footer>
                </div>
                <?php
            }
            echo '</div>';
        }
        echo '</div>';
    }
    ?>
</div>

</body>
</html>