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

        <br>

        <?php 
        $phones = array(
                'apple' => array ('Iphone 12', 'Iphone X', 'Iphone 12 Pro'),
                'samsung' => array ('Samsung Galaxy s20', 'Samsung Galaxy s20 Ultra'),
                'nokia' => array ('Nokia 83', 'Nokia 34')
        );
        foreach ($phones as $brand => $items) {
            echo "<h3>{$brand}</h3>";
            echo "<ul>";
            foreach ($items as $key => $value) {
                echo "<li>$value</li>";
            }
            echo "</ul>";
        }
        ?>

        <br>

        <?php
        $gadgets = [
            'phones' => ['apple' => 'Iphone 12', 
                        'samsung' => 'Samsung S20', 
                        'nokia' => 'Nokia 83'],
            'tablets' => ['lenovo' => 'Lenovo Toga Smart Tab', 
                        'samsung' => 'Samsung Galaxy Tab s5', 
                        'apple' => 'Apple Ipad Pro']
        ];
        foreach ($gadgets as $gadget => $items) {
            echo "<h3>{$gadget}</h3>";
            echo "<ul>";
            foreach ($items as $key => $value) {
                echo "<li> {$key} : {$value} </li>";
            }
            echo "</ul>";
        }
        ?>
    </body>
</html>