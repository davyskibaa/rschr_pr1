<?php
    require "quickSortFunc.php";

    if(isset($_GET['array']))
    {
        $str = $_GET['array'];
        $unsorted = explode(",", $str);

        if($unsorted[0] == '') {
            echo 'Empty array!';
            exit(0);
        }
        else {
            $sorted = quick_sort($unsorted);
            echo 'Before sorting: '. implode(',', $unsorted).'<br>After sorting: '.implode(',', $sorted);
        }
    }
?>