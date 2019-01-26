<?php include './functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include './includes/header.php'; ?>
    <main>
        <form action="index.php" method="GET">
            <label>Масив от стрингове:</label>
            <input type="text" name="string_array">
            <button type="submit">Изчисли</button>
        </form>
        <p>Въведете отделните елементи от масива със запетайка и интервал след това. Не слагайте кавички на отделните стрингове!</p>
        <?php
            if(!empty($_GET)) {
                $stringArray = $_GET['string_array'];
                $stringArray = explode(', ', $stringArray);
                if($stringArray === '') {
                    echo 'err';
                } else {
                    echo stringChainReplacements($stringArray);
                }
            }
        ?>
    </main>
    <?php include './includes/footer.php'; ?>
</body>
</html>