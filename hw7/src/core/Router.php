<?php

namespace src\core;

final class Router
{
    public function run()
    {
        echo "<pre>";
        var_dump($_SERVER["REQUEST_URI"]);
        echo "</pre>";
    }
}