<?php
function dbug($valeur)
{
    echo "<pre style='background-color:black;color:green;padding: 15px;overflow: auto;'>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:black;color:green;padding: 15px;overflow: auto;height: 500px;'>";
    var_dump($valeur);
    echo "</pre>";
    die();
}