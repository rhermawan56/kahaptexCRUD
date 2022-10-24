<?php

spl_autoload_register( function ($var)
{
    require_once __DIR__. "/core/" . $var . ".php";
});

require_once __DIR__.'\config\db.php';