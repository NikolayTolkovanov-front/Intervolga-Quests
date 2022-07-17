<?php
    // 1. Получаем файл
    $file = $_FILES["userfile"];

    if (isset($file)) {
        $tmpName = $file['tmp_name'];
        $dir_to_upload = __DIR__ . "\\upload\\";
        $csvAsArray = array_map('str_getcsv', file($tmpName));

        // 2. Создаем папку upload
        if (!is_dir($dir_to_upload)) {
            mkdir($dir_to_upload, 0777, true);

            // 3. Считываем данные с файла
            fill_files($csvAsArray, $dir_to_upload);
        } else {
            array_map('unlink', glob($dir_to_upload . "*"));
            fill_files($csvAsArray, $dir_to_upload);
        }
    } else {
        echo 'Вы не передали файл';
    }

    function fill_files($array, $dir_to_upload)
    {
        foreach ($array as $item) {
            $row = explode(";", $item[0]);
            $row_file_name = $row[0];
            $row_file_text = $row[1];
            $dir_to_file = $dir_to_upload . $row_file_name;

            // 4. создаем файлы 
            $file = fopen($dir_to_file, 'w');
            fwrite($file, $row_file_text);
            fclose($file);
        }
    }
