<?php

function pagar_bintang($integer)
{
    $num = $integer;
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            for ($j = 1; $j <= $num; $j++) {
                echo '*';
            }
            echo '<br>';
        } else {
            for ($k = 1; $k <= $num; $k++) {
                echo '#';
            }
            echo '<br>';
        }
    }
    echo '<br><br>';
}

echo pagar_bintang(5);
echo pagar_bintang(8);
echo pagar_bintang(10);

function xo($str)
{
    if (substr_count($str, "x") == substr_count($str, "o")) {
        echo "$str : Benar <br>";
    } else {
        echo "$str : Salah <br>";
    }
}

echo xo('xoxoxo'); // "Benar"
echo xo('oxooxo'); // "Salah"
echo xo('oxo'); // "Salah"
echo xo('xxooox'); // "Benar"
echo xo('xoxooxxo'); // "Benar"