<?php
function load_template($template_name)
{
    $template_directory = explode("/", $template_name)[0];
    $template_name = explode("/", $template_name)[1];

    if (file_exists($_SERVER['DOCMENT_ROOT'] . "src/templates/$template_directory/$template_name.php")) {
        include $_SERVER['DOCMENT_ROOT'] . "src/templates/$template_directory/$template_name.php";
    } else {
        throw new ErrorException("Template File not found in " . $template_name);
    }
}
