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
        if (isset($_POST['list'])) {
            $list = $_POST['list'];
            foreach ($list as $item) {
                echo "{$item} <br />";
            }
            //echo $list;
        }
        ?>
        <h3>Форма ввода данных</h3>
        <form method="post">
            <h4>Флажки</h4>
            <p>ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET" /></p>
            <p> PHP: <input type="checkbox" name="technologies[]" value="PHP" /></p>
            <p>Node.js: <input type="checkbox" name="technologies[]" value="Node.js" /></p>
            <h4>Переключатели</h4>
            <input type="radio" name="course" value="ASP.NET" /> ASP.NET <br>
            <input type="radio" name="course" value="PHP" /> PHP <br>
            <input type="radio" name="course" value="Node.js" /> Node.js <br> 
            <h4>Список</h4>
            <select name="list[]" size="4" multiple="multiple">
                <option value="ASP.NET">ASP.NET</option>
                <option value="PHP">PHP</option>
                <option value="Ruby">Ruby</option>
                <option value="Python"> Python </option>
            </select><br>
            <input type="submit" value="отправить">
            
        </form>
    </body>
</html>