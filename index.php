<?php
$num = 15;
if($num > 10) {
    var_dump('Suurem');
} elseif ($num < 10) {

} else {

}

$day = date('w', strtotime('09.09.2025'));
var_dump($day);

switch($day) {
    case 1:
        var_dump('esmaspäev');
        break;
    case 2:
        var_dump('teisipäev');
        break;
    case 3:
        var_dump('kolmapäev');
        break;
    case 4:
        var_dump('neljapäev');
        break;
    case 5:
        var_dump('reede');
        break;
    case 6:
    case 7:
        var_dump('pidupäev');
        break;
    default:
        var_dump('imelik päev');
}