<?php
$file = file('./db/cards_source.json');

$file = preg_replace('/((^|\n).*Материалы.*(\n|$))/', "", $file);
$file = preg_replace('/((^|\n).*"class".*(\n|$))/', "", $file);
$file = preg_replace('/((^|\n).*"source".*(\n|$))/', "", $file);

$file = preg_replace('/((^|\n).*"components": "В",.*(\n|$))/', "\t\t" . '"components": ["В"],' . "\n", $file);
$file = preg_replace('/((^|\n).*"components": "С",.*(\n|$))/', "\t\t" . '"components": ["С"],' . "\n", $file);
$file = preg_replace('/((^|\n).*"components": "М",.*(\n|$))/', "\t\t" . '"components": ["М"],' . "\n", $file);
$file = preg_replace('/((^|\n).*"components": "В, С",.*(\n|$))/', "\t\t" . '"components": ["В", "С"],' . "\n", $file);
$file = preg_replace('/((^|\n).*"components": "С, М",.*(\n|$))/', "\t\t" . '"components": ["С", "М"],' . "\n", $file);
$file = preg_replace('/((^|\n).*"components": "В, М",.*(\n|$))/', "\t\t" . '"components": ["В", "М"],' . "\n", $file);
$file = preg_replace('/((^|\n).*"components": "В, С, М",.*(\n|$))/', "\t\t" . '"components": ["В", "С", "М"],' . "\n", $file);

$file = preg_replace('/уровень/', "", $file);
$file = preg_replace('/футов/', " фт", $file);
$file = preg_replace('/фт\^2/', " фт2", $file);
$file = preg_replace('/минуты/', "мин", $file);
$file = preg_replace('/минута/', "мин", $file);
$file = preg_replace('/минут/', "мин", $file);
$file = preg_replace('/часа/', "ч", $file);
$file = preg_replace('/час/', "ч", $file);
$file = preg_replace('/бонусное действие/', "Бонус.Д", $file);
$file = preg_replace('/ действие/', "Д", $file);
$file = preg_replace('/Заговор/', 0, $file);

$file = preg_replace('/Магия/', '', $file);

$file = preg_replace('/Если вы накладываете это заклинание, используя ячейку 2 уровня или выше, /', "", $file);
$file = preg_replace('/Если вы накладываете это заклинание, используя ячейку 3 уровня или выше, /', "", $file);
$file = preg_replace('/Если вы накладываете это заклинание, используя ячейку 4 уровня или выше, /', "", $file);
$file = preg_replace('/Если вы накладываете это заклинание, используя ячейку 5 уровня или выше, /', "", $file);
$file = preg_replace('/Если вы накладываете это заклинание, используя ячейку 6 уровня или выше, /', "", $file);
$file = preg_replace('/Если вы накладываете это заклинание, используя ячейку 7 уровня или выше, /', "", $file);
$file = preg_replace('/Если вы накладываете это заклинание, используя ячейку 8 уровня или выше, /', "", $file);
$file = preg_replace('/Если вы накладываете это заклинание, используя ячейку 9 уровня или выше, /', "", $file);

$file = preg_replace('/Используя ячейку 2 уровня или выше, /', "", $file);
$file = preg_replace('/Используя ячейку 3 уровня или выше, /', "", $file);
$file = preg_replace('/Используя ячейку 4 уровня или выше, /', "", $file);
$file = preg_replace('/Используя ячейку 5 уровня или выше, /', "", $file);
$file = preg_replace('/Используя ячейку 6 уровня или выше, /', "", $file);
$file = preg_replace('/Используя ячейку 7 уровня или выше, /', "", $file);
$file = preg_replace('/Используя ячейку 8 уровня или выше, /', "", $file);
$file = preg_replace('/Используя ячейку 9 уровня или выше, /', "", $file);

$file = preg_replace('/Урон этого заклинания увеличивается на 1к4, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон этого заклинания увеличивается на 1к6, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон этого заклинания увеличивается на 1к8, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон этого заклинания увеличивается на 1к10, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон этого заклинания увеличивается на 1к12, когда вы достигаете /', "", $file);

$file = preg_replace('/Урон от заклинания увеличивается на 1к4, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон от заклинания увеличивается на 1к6, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон от заклинания увеличивается на 1к8, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон от заклинания увеличивается на 1к10, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон от заклинания увеличивается на 1к12, когда вы достигаете /', "", $file);

$file = preg_replace('/Урон заклинания увеличивается на 1к4, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон заклинания увеличивается на 1к6, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон заклинания увеличивается на 1к8, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон заклинания увеличивается на 1к10, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон заклинания увеличивается на 1к12, когда вы достигаете /', "", $file);

$file = preg_replace('/Урон этого заклинания увеличивается на 1d4, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон этого заклинания увеличивается на 1d6, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон этого заклинания увеличивается на 1d8, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон этого заклинания увеличивается на 1d10, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон этого заклинания увеличивается на 1d12, когда вы достигаете /', "", $file);

$file = preg_replace('/Урон от заклинания увеличивается на 1d4, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон от заклинания увеличивается на 1d6, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон от заклинания увеличивается на 1d8, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон от заклинания увеличивается на 1d10, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон от заклинания увеличивается на 1d12, когда вы достигаете /', "", $file);

$file = preg_replace('/Урон заклинания увеличивается на 1d4, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон заклинания увеличивается на 1d6, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон заклинания увеличивается на 1d8, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон заклинания увеличивается на 1d10, когда вы достигаете /', "", $file);
$file = preg_replace('/Урон заклинания увеличивается на 1d12, когда вы достигаете /', "", $file);

$file = preg_replace(['/1d4/', '/1к4/'], "<b>1к4</b>", $file);
$file = preg_replace(['/1d6/', '/1к6/'], "<b>1к6</b>", $file);
$file = preg_replace(['/1d8/', '/1к8/'], "<b>1к8</b>", $file);
$file = preg_replace(['/1d10/', '/1к10/'], "<b>1к10</b>", $file);
$file = preg_replace(['/1d12/', '/1к12/'], "<b>1к12</b>", $file);

$file = preg_replace(['/2d4/', '/2к4/'], "<b>2к4</b>", $file);
$file = preg_replace(['/2d6/', '/2к6/'], "<b>2к6</b>", $file);
$file = preg_replace(['/2d8/', '/2к8/'], "<b>2к8</b>", $file);
$file = preg_replace(['/2d10/', '/2к10/'], "<b>2к10</b>", $file);
$file = preg_replace(['/2d12/', '/2к12/'], "<b>2к12</b>", $file);

$file = preg_replace(['/3d4/', '/3к4/'], "<b>3к4</b>", $file);
$file = preg_replace(['/3d6/', '/3к6/'], "<b>3к6</b>", $file);
$file = preg_replace(['/3d8/', '/3к8/'], "<b>3к8</b>", $file);
$file = preg_replace(['/3d10/', '/3к10/'], "<b>3к10</b>", $file);
$file = preg_replace(['/3d12/', '/3к12/'], "<b>3к12</b>", $file);

$file = preg_replace(['/4d4/', '/4к4/'], "<b>4к4</b>", $file);
$file = preg_replace(['/4d6/', '/4к6/'], "<b>4к6</b>", $file);
$file = preg_replace(['/4d8/', '/4к8/'], "<b>4к8</b>", $file);
$file = preg_replace(['/4d10/', '/4к10/'], "<b>4к10</b>", $file);
$file = preg_replace(['/4d12/', '/4к12/'], "<b>4к12</b>", $file);

$file = preg_replace(['/5d4/', '/5к4/'], "<b>5к4</b>", $file);
$file = preg_replace(['/5d6/', '/5к6/'], "<b>5к6</b>", $file);
$file = preg_replace(['/5d8/', '/5к8/'], "<b>5к8</b>", $file);
$file = preg_replace(['/5d10/', '/5к10/'], "<b>5к10</b>", $file);
$file = preg_replace(['/5d12/', '/5к12/'], "<b>5к12</b>", $file);

$file = preg_replace('/модификатор вашей базовой характеристики/', "мод.БЗХ", $file);

$file = preg_replace('/сб-Ловкость/', "<b>[СБ_Ловкость]</b>", $file);
$file = preg_replace('/сб-Мудрость/', "<b>[СБ_Мудрость]</b>", $file);
$file = preg_replace('/сб-Телосложение/', "<b>[СБ_Телосложение]</b>", $file);
$file = preg_replace('/сб-Сила/', "<b>[СБ_Сила]</b>", $file);

$file = preg_replace('/пров-Анализ/', "<b>[пров_Анализ]</b>", $file);
$file = preg_replace('/пров-Харизма/', "<b>[пров_Харизм]</b>", $file);

$file = preg_replace('/((^|\n).*Длительность: Концентрация.*(\n|$))/', '"<b><i>[ Концентрация ]</i></b>",' . "\n", $file);

$file = preg_replace('/первичный урон увеличивается на /', "+", $file);
$file = preg_replace('/урон увеличивается на /', "+", $file);
$file = preg_replace('/вы можете воздействовать на одного дополнительного зверя /', "+1 зверь ", $file);
$file = preg_replace('/количество боеприпасов увеличивается на два /', "+2 боеприпаса ", $file);

$file = preg_replace('/вы можете сделать целью одно дополнительное /', "+1 ", $file);
$file = preg_replace('/заклинание создаёт по одному дополнительному дротику/', "+1 дротик", $file);
$file = preg_replace('/Вы оживляете или контролируете два дополнительных существами/', "+2 существа", $file);
$file = preg_replace('/и временные хиты и урон холодом увеличиваются на 5/', "Вр.хиты и Урон +5", $file);
$file = preg_replace('/за каждый ячейки выше пятого урон от сжатого кулака увеличивается на 2к8/', "+2к8 за каждую ячейку выше", $file);
$file = preg_replace('/вы можете увеличить размер куба на/', "рзмер +", $file);

$file = preg_replace('/ уровня \(/', 'ур - ', $file);
$file = preg_replace('/\), 1/', '", "1', $file);
$file = preg_replace('/\) и 1/', '", "1', $file);
$file = preg_replace('/\)\./', '', $file);

$file = preg_replace('/за каждый ячейки выше.*(\n|$)/', 'за каждую ячейку выше"', $file);
$file = preg_replace('/за каждый выше.*(\n|$)/', 'за каждую ячейку выше"', $file);

$file = preg_replace(
    '/"вы можете изменить воспоминания о событиях, произошедших до 7 дней назад \(6\), 30 дней назад \(7", "1 года назад \(8\), или в любой момент в жизни существа \(9"/',
    '"6 яч <br> 7 дн", "7 яч <br> 30 дн", "8 яч <br> 1 год", "9 яч <br> любое"', $file);


$file_str = implode('', $file);
$file_data = json_decode($file_str, true);
$file_cards = $file_data["cards"];
$file_cards_sorted = [];

for ($i = 0; $i < 9; $i++) {
    $level = $i;

    $cards_i = array_values(array_filter($file_cards, function ($card) use ($level) {
        return ($level <= $card['level'] && $card['level'] <= $level);
    }));

    usort($cards_i, function ($a, $b) {
        return strcmp($a["name"], $b["name"]);
    });

    $file_cards_sorted[$i] = $cards_i;
}
$file_data['cards'] = $file_cards_sorted;

$file = json_encode($file_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

file_put_contents('./db/cards.json', $file);