<?php
if (isset($_POST['remember'])) {
    print_r($_POST);
}
?>
<form method="">
Запомнить: <input type="checkbox" name="remember" value="1" />
<input type="submit" value="отправить">
</form>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf8'>
    </head>
    <body>
        <?php
        if (isset($_POST['technologies'])) {
            $technologies = $_POST['technologies'];
            foreach ($technologies as $item) {
                echo "{$item} <br />";
            }
        }
        if (isset($_POST['course'])) {
            $course = $_POST['course'];
            echo $course;
        }
        ?>
        <h3>Форма ввода данных</h3>
        <form method="post">
            <p>ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET" /></p>
            <p> PHP: <input type="checkbox" name="technologies[]" value="PHP" /></p>
            <p>Node.js: <input type="checkbox" name="technologies[]" value="Node.js" /></p>
            <input type="radio" name="course" value="ASP.NET" /> ASP.NET <br>
            <input type="radio" name="course" value="PHP" /> PHP <br>
            <input type="radio" name="course" value="Node.js" /> Node.js <br> 
            <input type="submit" value="отправить">
        </form>
    </body>
</html>