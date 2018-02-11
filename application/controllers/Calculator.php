<?php

class Calculator extends CI_Controller 
{
    public function plus($num1 = 0, $num2 = 0)
    {
        echo "ค่าที่ 1 คือ : " . $num1 . '<br>';
        echo "ค่าที่ 1 คือ : " . $num2 . '<br>';
        echo "ผลรวม" . $num1 . " + " . $num2 . " คือ " . ($num1 + $num2);
    }
}