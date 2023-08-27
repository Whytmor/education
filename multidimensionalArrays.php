<?php
$families = array (array ('Tom', 'Alice'), array ('Bob', 'Kate'));
$families = [['Tom', 'Alice'],['Bob', 'Kate']];

$families = [['Tom', 'Alice'],['Bob', 'Kate']];
print_r($families[0]); // array ([0] => tom [1] => alice)

$families = [['Tom', 'Alice'],['Bob', 'Kate']];
echo $families[0][0] . '<br />'; // tom
echo $families[0][1] . '<br />'; // alice
echo $families[1][0] . '<br />'; // bob
echo $families[1][1] . '<br /'; // kate
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf8'>
    </head>
    <body>
        <table>
            <?php
            $families = [['Tom', 'Alice'],['Bob', 'Kate'], ['Sam', 'Mary']];
            foreach ($families as $family) {
                echo "<tr>";
                foreach ($family as $user) {
                    echo "<td> {$user} </td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>