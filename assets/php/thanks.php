<?php
$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank you for your inquiry!</h1>
    <div>
        <h2>Contents</h2>
        <p>Name:<?php echo $name;?></p>
        <p>Email:<?php echo $email;?></p>
        <p>Content:<?php echo $content;?></p>
    </div>
</body>
</html>