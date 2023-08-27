<?php
function hello() 
{
    echo 'Hello PHP <br/>';
}

hello();
hello();
hello(); // вызов функции
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf8'>
    </head>
    <body>
        <?php
        function helloHtml()
        {
            echo '<h2>Hello HTML</h2>';
        }
        helloHtml();
        helloHtml();
        helloHtml();
        ?>
    </body>
</html>

<?php 
helloPhp(); // вызов функции

function helloPhp()
{
    echo 'Hello PHP';
}


// частный случай который вызовет ошибку
helo();
if(true) {
    function helo()
    {
        echo 'Hello PHP';
    }

    helo();
}