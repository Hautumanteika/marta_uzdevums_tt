<?php
    $current_page = 'add';
    include 'nav.php'; //add navbar
    require_once "db.php"; //connect with database
    $input = $_POST;
    if ( isset($input['add']) )
    {
        $errors = array();
        if ( trim($input['title']) == '' )
        {
            $errors[] = 'Input title please'; //title input check
        }
    
        if ( $input['text'] == '' )
        {
            $errors[] = 'Input text please'; //text input check
        }

        if ( empty($errors) )
        {
            $inputs = R::dispense('inputs'); //table "inputs" creating
            $inputs->title = $input['title']; //add column "title" to table
            $inputs->text = $input['text']; //add column "text" to table
            R::store($inputs); //input to table
            echo '<div style="color:green;">Adding completed!</div><hr>'; //Success notification
        }else
        {
            echo '<div id="errors" style="color: rgb(162, 0, 255); --darkreader-inline-color:#ff1a1a;" data-darkreader-inline-color="">' .array_shift($errors). '</div><hr>'; //Error notification
        }
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
<body>
<form action="add.php" method="POST" style="margin-left: 40%;" enctype="multipart/form-data"> <!--Form body-->
    <p>
        <p>
            <strong>Title</strong>:
        </p>
        <input type="text" name="title" class="input"> <!--Title input-->
    </p>
    <p>
        <p>
            <strong>Text</strong>:
        </p>
        <input type="text" name="text" class="input_text"> <!--Text input-->
    </p>
    <p>
    <button type="submit" name="add" class="button apply" style="margin-left: 11.5%; margin-top: 1%;">add</button>
</form>
</body>
</html>