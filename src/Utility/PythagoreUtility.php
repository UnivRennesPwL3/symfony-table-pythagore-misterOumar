<?php

namespace App\Utility;

class PythagoreUtility{

    public function display(){
        echo '<table style="border-collapse: collapse;">';
        echo '<tbody>';

        for ($i = 0; $i <= 10; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= 10; $j++) {
                echo '<td>';
                if ($j == $i) {
                    echo ($j == 0 && $i == 0) ? '0' : 'X';
                } else {
                    echo ($i == 0 ? $j  : ($j == 0 ? $i :  $i * $j));
                }
                echo '</td>';
            }
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';

    }
}