<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TextArea</title>
</head>
<body>
<?php
$text = '';
if(file_exists('content.txt')){
   $text =  file_get_contents('content.txt');
}
?>
<form action="post_area_form.php" method="POST">
    <textarea placeholder="Текст" name="text"> <?php echo $text?></textarea>
    <button type="submit">Отправить текст</button>
</form>
</body>
</html>