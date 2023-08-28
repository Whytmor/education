<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf8'>
    </head>
    <body>
        <h2>Анкета</h2>
        <form action="input.php" method="post">
            <p>Введите имя: <br> <input type="text" name="firstName"></p>
            <p>Форма обучения: <br> 
            <input type="radio" name="eduform" value="очно" /> очно <br>
            <input type="radio" name="eduform" value="заочно" /> заочно </p>
            <p>Требуется общежитие: <br>
            <input type="checkbox" name="hostel" />Да </p>
            <p>Выберите курсы: <br>
            <select name="courses[]" size="5" multiple="multiple">
                <option value="ASP.NET">ASP.net</option>
                <option value="PHP">PHP</option>
                <option value="Ruby">Ruby</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
            </select></p>
            <p>Краткий комментарий: <br>
            <textarea name="comment" maxlength="200"></textarea></p>
            <input type="submit" value="Отправить">
        </form>
    </body>
</html>