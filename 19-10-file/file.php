<?php

$file = fopen("./files/text.txt", "a");

if ($file) {
    echo 'есть';
    fwrite($file, "2\n213");
} else {
    echo "нету";
}

fclose($file);
