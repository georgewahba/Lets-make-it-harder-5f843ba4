<?php
if ($argv[1] == $argv[2]) {
    echo "in balans";
} else {
    $over = ($argv[1] - $argv[2]);
    $erbij = explode(',', $argv[3]);
    foreach ($erbij as $value) {
        if ($argv[1] + $value == $argv[2] || $argv[2] + $value == $argv[1]) {
            echo $value;
        }
    }
}
