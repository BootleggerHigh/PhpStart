<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list</title>
</head>
<body>

<?php

$list_str = null;

if (file_exists('list.txt')) {
    $list_str = file_get_contents('list.txt');
    $list_array = str_split($list_str);
}
?>
<form action="post_textea.php" method="POST">
    <?php
    foreach ($list_array as $key => $value) {
        echo "<br/><input type='checkbox' name={$key} value={$value}> $value </input>";
    }
    ?>
    <br/>
    <button type="submit">Понеслась</button>
</form>
</body>
</html>


