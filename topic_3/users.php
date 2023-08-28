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
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf8'>
    </head>
    <body>
        <?php
        if (isset($_POST['users'])) {
            $users = $_POST['users'];
            echo "В массиве " . count($users) . " элемента/ов<br />";
            foreach ($users as $user) {
                echo "{$user}<br />";
            }
        }
        
        ?>
        <h3>Форма ввода данных</h3>
        <form method="POST">
            <p>User 1: <input type="text" name="users[]" /></p>
            <p>User 2: <input type="text" name="users[]" /></p>
            <p>User 3: <input type="text" name="users[]" /></p>
            <input type='submit' value='отправить'>
        </form>
    </body>
</html>