<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf8'>
    </head>
    <body>
        <?php
        // if ($_FILES && $_FILES['filename']['error'] == UPLOAD_ERR_OK) {
        //     $name = $_FILES['filename']['name'];
        //     move_uploaded_file($_FILES['filename']['tmp_name'], $name);
        //     echo 'файл загружен'; 
        //     print_r($_FILES);
        // }
        if ($_FILES) {
            foreach ($_FILES['uploads']['error'] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES['uploads']['tmp_name'][$key];
                    $name = "uploads/" . $_FILES['uploads']['name'][$key];
                    move_uploaded_file($tmp_name, "{$name}");
                }
            }
            echo "Файлы загружены";
        }
        ?>
        <h2>Загрузка файла</h2>
        <!-- <form method='post' enctype="multipart/form-data">
        Выберите файл: <input type="file" name="filename" size="10" /><br /><br />
        <input type="submit" value="Загрузить">
        </form> -->
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="uploads[]"><br />
            <input type="file" name="uploads[]"><br />
            <input type="file" name="uploads[]"><br />
            <input type="file" name="uploads[]"><br />
            <input type="submit" value="Загрузить">

        </form>

    </body>
</html>