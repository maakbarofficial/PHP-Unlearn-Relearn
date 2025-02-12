<?php

function debug($data, $exit = false)
{
    echo '<div style="background-color: #ffc07c; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-family: monospace;">';
    echo '<pre style="color: black; font-weight: Bold;">';
    print_r($data);
    echo '</pre>';
    echo '</div>';

    if ($exit) {
        exit;
    }
}
