<?php
    $span = range(1,75); //generated items count from 1 to 75
    $test_img = "alexey-leontev-"; //test image name
    shuffle($span); //array shuffle for random numbers
    for($i = 1; $i <= 75; $i++){ //idk how but i make it work randomly generating gallety layouts
        if($i == $span[0] || $i == $span[1] && $i <= 20) { // big cells
            $img = $test_img.$i;
            echo "<div class=\"grid-item grid-item-{$i} span-3\" style=\"background-image: url(images/{$img}.jpg); background-size:cover; background-repeat:no-repeat; background-position:center;\">
                    <div class=\"overlay\">
                    <div class=\"text\">{$img}</div>
                </div>
            </div>";
        }
        else if($i == $span[2] || $i == $span[3] || $i == $span[4] || $i == $span[5] || $i == $span[6] && $i <= 60){ //medium cells
            $img = "alexey-leontev-".$i;
            echo "<div class=\"grid-item grid-item-{$i} span-2\" style=\"background-image: url(images/{$img}.jpg); background-size:cover; background-repeat:no-repeat; background-position:center;\">
                    <div class=\"overlay\">
                    <div class=\"text\">{$img}</div>
                </div>
            </div>";
        }
        else{ //default cells
            $img = "alexey-leontev-".$i;
            echo "<div class=\"grid-item grid-item-{$i} span-1\" style=\"background-image: url(images/{$img}.jpg); background-size:cover; background-repeat:no-repeat; background-position:center;\">
                    <div class=\"overlay\">
                    <div class=\"text\">{$img}</div>
                </div>
            </div>";
        }
    }
?>