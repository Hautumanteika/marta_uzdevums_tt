<?php
$current_page = 'check';
include 'nav.php'; //add navbar
require_once "db.php"; //database connection
include 'head.php'; //add head
$inputs = R::findAll('inputs'); //find all items in table 'inputs'
foreach ($inputs as $inputed){?> 
    <div style="border: solid 2px; color: white;">
        <ul>
            <li class="item" style="font-size:24px; color: white;"><strong><?php echo $inputed->title.'<br><br>' ?></strong></li> <!--Get title and text from rows in table 'inputs'-->
            <li class="item"><?php echo $inputed->text.'<br>' ?></li>
        </ul>
    </div>
<?php
}
?>