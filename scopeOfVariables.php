<?php
$condition = true;
if ($condition) {
    $name = 'Tom';
}
echo $name; // Tom

$i = 6; 
switch ($i) {
    case 5: 
        $name = 'Tom';
        break;
    case 6: 
        $name = 'Bob';
        break;
    default: 
        $name = 'Sam';
        break;
}
echo $name; // bob

