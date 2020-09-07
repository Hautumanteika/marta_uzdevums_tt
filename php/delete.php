<?php     
    $current_page = 'delete';
    include 'nav.php'; //add navbar
    require_once "db.php"; //connect with database
    include 'head.php'; //add head
    $inputs = R::findAll('inputs');
    foreach ($inputs as $inputed){?>
    <div style="border: solid 2px; color: white;"> <!--Item body with content-->
        <ul>
            <li class="item" name="title" style="font-size:24px; color: white;"><strong><?php echo $inputed->title.'<br><br>' ?></strong></li>
            <li class="item" name="text"><?php echo $inputed->text.'<br><br><br>' ?></li>
            <input hidden name="id"><?php echo $inputed->id ?></input>
            <label for="option" name="all_options" >Action</label>
            <form method="post">
            <button type="submit" name="select" class="button apply">Delete</button>
            </form>
            <?php
                if(array_key_exists('select',$_POST)) //deletins selected item
                {
                    $id = $inputed->id; //item id
                    R::trash('inputs' , $id); //deleting
                    break; //stop cycle
                }
            ?>
        </ul>
    </div>
<?php
}
?>