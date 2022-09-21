<?php
    class Figure
    {
        public int $color, $shape, $x, $y;

        public function __construct($num_int)
        {
            $this->color = $num_int & 3;
            $this->shape = $num_int >> 1 & 3;
            $this->x = 50 + 100 * ($num_int >> 2 & 3);
            $this->y = 50 + 100 * ($num_int >> 3 & 3);
        }
    }
?>


