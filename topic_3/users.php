<?php 
$users = [];
if (isset($_GET['users'])) {
    $users = $_GET['users'];
}
echo "В массиве " . count($users) . " элемента/ов<br>";
foreach ($users as $user) {
    echo "{$user}<br />";
}

?>