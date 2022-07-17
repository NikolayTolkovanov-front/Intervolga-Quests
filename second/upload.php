<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form  enctype="multipart/form-data" action="./second/csv.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        Отправить этот файл: <input required name="userfile" type="file" />
        <input type="submit" value="Отправить файл" />
    </form>
</body>

</html>