<?php
// 1. Получаем файл
// print_r($_FILES);
$file = $_FILES["userfile"];
if ($file["name"] != "") {
    $file_name = $file["name"];
    $file_type = $file["type"];
    $file_tmp = $file["tmp_name"];
    $file_size = $file["size"];
    
    print_r($file_name . "<br>" . $file_type . "<br>" . $file_tmp . "<br>" . $file_size);
}

else {
    print_r("Файл отсутствует");
}
?>