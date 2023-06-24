<?php
    error_reporting(-1);
    if(!empty($_FILES)){
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
        if(move_uploaded_file($_FILES['file']['tmp_name'], "upload/{$_FILES['file']['name']}")){
            echo 'Success';
        }else{
            echo 'Error';
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Send</button>
    </form>
</body>
</html>