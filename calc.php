<?php
$log = 'options.txt';
$record = fopen($log, 'r');
$text = trim(fread($record, 9999999));
$votes = explode("\n", $text);
$ranking = array();

foreach ($votes as $json) {
    $vote = json_decode($json);
    foreach ($vote as $voter => $list) {
        $rank = explode(',', $list);
        $list_size = count($rank);
        foreach ($rank as $key => $value) {
            if (!isset($ranking[$value])) {
                $ranking[$value] += 0;
            }
            $ranking[$value] += ($list_size - $key);
        }
    }
}

uasort($ranking, function($a, $b){
    return $b - $a;
});

echo "<pre>\n";
var_dump($ranking);
