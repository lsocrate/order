<?php
$log = 'options.txt';
$record = fopen($log, 'r');
$text = trim(fread($record, 9999999));
$lines = explode("\n", $text);

$games = array();
$votes = array();
foreach ($lines as $json) {
    $vote = json_decode($json);
    foreach ($vote as $voter => $list) {
        $rank = explode(',', $list);
        $votes[$voter] = $rank;
        foreach ($rank as $key => $value) {
            if (!isset($games[$value])) {
                $games[] = $value;
            }
        }
    }
}

$games = array_unique($games);
$sorted = $games;
usort($sorted, function($gameA, $gameB) use($votes) {
    $a = 0;
    $b = 0;
    foreach ($votes as $voter => $preferences) {
        $games2position = array_flip($preferences);
        if ($games2position[$gameA] > $games2position[$gameB]) {
            $a++;
        } else {
            $b++;
        }
    }

    return $a - $b;
});

echo "<pre>\n";
var_dump($sorted);
