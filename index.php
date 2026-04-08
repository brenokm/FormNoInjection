
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
include('mensagem.php');
?>
    <form class="container card" action="sub2.php" method="post">
        <div class="red">

            <label for="textUsername">Username</label>
            <input type="text" name="text_username">



            <label for="textPass">Password</label>
            <input type="text" name="text_pass">


            <button type="submit"> Entrar</button>
        </div>
    </form>

</body>

</html>