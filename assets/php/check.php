<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Confirmation of input contents</h1>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    echo 'Welcome' .$name.'<br>';
    echo 'Email:' .$email.'<br>';
    echo 'Content:' .$content.'<br>';

    ?>

    <form action="thanks.php" method="POST">
        <input type="hidden" id="name" name = "name" value="<?php echo $name ?>">
        <input type="hidden" id="email" name = "email" value="<?php echo $email ?>">
        <input type="hidden" id="content" name = "content" value="<?php echo $content ?>">
        <button type="button" style="display:block" onclick="history.back();">戻る</button>
        <button type="submit">OK</button>
    </form>
    
</body>
</html>