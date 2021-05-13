<?php

function loadAllFiles($uploadPath)
{
    $path = array_diff(scandir($uploadPath), ['..', '.']);
    return !empty($path) ? $path : false;
}

function loadMultiple($extensions, $uploadPath)
{
    foreach ($_FILES["photo"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $file_tmp_name = $_FILES["photo"]["tmp_name"][$key];
            $file_name = $_FILES["photo"]["name"][$key];
            $file_size = $_FILES["photo"]["size"][$key];
            $file_ext = strtolower(end(explode(".", $file_name)));

            if (in_array($file_ext, $extensions)) {
                if ($file_size > 5 * 1024 * 1024) {
                    echo "Размер превышает 5 мб";
                } else {
                    move_uploaded_file($file_tmp_name, $uploadPath . $file_name);
                }
            } elseif ("txt" == $file_ext) {
                move_uploaded_file($file_tmp_name, $uploadPath . $file_name);
            } else {
                move_uploaded_file($file_tmp_name, $uploadPath . $file_name);
            }
        }
    }
}

function deleteImg($array)
{
    $error = "";
    foreach ($array as $file) {
        if (!unlink("../upload/" . $file)) {
            $error = "Ошибка удаления";
            break;
        }
    }
    return $error;
}

function loadImg($maxFileSize, $validFileTypes, $uploadPath)
{
    $error = "";

    if ($_FILES) {
        $file = $_FILES['avatar'];
        if (empty($_FILES['avatar'])) {
            $error = "Произошла ошибка загрузки данных";
        } else if ($file['size'] > $maxFileSize) {
            $error = "Размер файла не должен превышать 5 мб";

        } else {
            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $type = finfo_file($fileInfo, $file['tmp_name']);
            finfo_close($fileInfo);

            if (in_array($type, $validFileTypes)) {
                if (!move_uploaded_file($file['tmp_name'], $uploadPath . $file['name'])) {
                    $error = "не удалось загрузить изображение....";
                }
            } else {
                $error = "Расширение файла должно быть таким: jpg, jpeg или png...";

            }
        }
        return !empty($error) ? $file['name'] . "-" . $error : $error;
    }
}
