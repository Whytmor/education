<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf8'>
        
    </head>
    <body>
        <?php
        $name = 'не определено';
        $age = 'не определено';
        if (isset($_POST['name'])) {
            $name = htmlentities($_POST['name']);
        }
        if (isset($_POST['age'])) {
            $age = htmlentities($_POST['age']);
        }
        echo "Имя: {$name}<br> Возраст: {$age}";
        ?>
        <form method="POST">
            <p>Имя: <input type="text" name="name"></p>
            <p>Возраст: <input type="number" name="age"></p>
            <input type="submit" value="отправить">
        </form>
    </body>
</html>