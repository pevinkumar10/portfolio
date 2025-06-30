<?php
function load_template($name)
{
    include $_SERVER['DOCMENT_ROOT'] . "src/templates/$name.php";
    // include_once __DIR__ . "/../templates/$name.php";
}
