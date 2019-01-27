<?php include './includes/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/vendor/normalize.css">
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div id="container">
        <?php include './includes/header.php'; ?>
        <main>
            <form action="index.php" method="GET">
                <label>Масив от стрингове:</label>
                <input type="text" pattern="(([a-z]{1,}), ){1,}[a-z]{1,}" name="string_array">
                <button type="submit">Изчисли</button>
            </form>
            <p class="italic">Въведете отделните елементи от масива със запетайка и интервал след това. Не слагайте кавички на отделните стрингове!</p>
            <?php
                if(!empty($_GET)) {
                    $stringArray = $_GET['string_array'];
                    $stringArray = explode(', ', $stringArray);
                    echo 'Резултат: ' . stringChainReplacements($stringArray);
                }
                ?>
        </main>
        <?php include './includes/footer.php'; ?>
    </div>
</body>
</html>