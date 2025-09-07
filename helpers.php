<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('d')) {
    /**
     * Dumps the passed variables and does not end the script.
     *
     * @param mixed
     * @return void
     */
    function d()
    {
        array_map(function ($x) {
            (new VarDumper)->dump($x);
        }, func_get_args());
    }
}