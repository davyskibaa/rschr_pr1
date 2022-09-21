<?php
    require "drawerFigures.php";

    if(isset($_GET['num'])) {
        if(!is_numeric($_GET['num'])) {
            echo 'Invalid parameter!';
        }
        else {
            $num_int = (int) $_GET['num'];
            $figure = new Figure($num_int);

            switch($figure->color){
                case 0:
                    $color = 'red';
                    break;
                case 1:
                    $color = 'green';
                    break;
                case 2:
                    $color = 'blue';
                    break;
                case 3:
                    $color = 'orange';
                    break;
            }

            switch($figure->shape) {
                case 0:
                    $shape = 'circle';
                    break;
                case 1:
                    $shape = 'square';
                    break;
                case 2:
                    $shape = 'rectangle';
                    break;
                case 3:
                    $shape = 'ellipse';
                    break;
            }

            if($shape == 'circle' || $shape == 'square')
                $figure->x > $figure->y ? $figure->x=($figure->y) : $figure->y=($figure->x);
            $svg_code = '<svg width = "' . $figure->x . '" height= "' . $figure->y . '">';

            switch($shape) {
                case 'circle':
                    $svg_code .= '<circle cx="' . $figure->x/2 . '" cy ="' . $figure->y / 2 . '" r="' . $figure->x / 2 . '" fill = "' . $color . '" />';
                    break;
                case 'square':
                    $svg_code .= '<rect x="0" y="0" width="' . $figure->x . '" height="' . $figure->y . '" fill="' . $color . '" />';
                    break;
                case 'rectangle':
                    $svg_code .= '<rect x="0" y="0" width="' . $figure->x . '" height="' . $figure->y . '" fill="' . $color . '" />';
                    break;
                case 'ellipse':
                    $svg_code .= '<ellipse cx="' . $figure->x / 2 . '" cy ="' . $figure->y / 2 . '" rx="' . $figure->x / 2 . '" ry="' . $figure->y / 2 . '" fill = "' . $color . '" />';
                    break;
            }
            echo $svg_code;
        }
    }
?>