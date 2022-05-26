<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dda')) {
    function dda(...$vars)
    {
        if (!in_array(\PHP_SAPI, ['cli', 'phpdbg'], true) && !headers_sent()) {
            header('HTTP/1.1 500 Internal Server Error');
        }

        foreach ($vars as $var) {
            if (method_exists($var, 'toArray')) {
                return Vardumper::dump($var->toArray());
            } else {
                return Vardumper::dump($var);
            }
        }
        exit(1);
    }
}

if (!function_exists('da')) {
    function da(...$vars)
    {
        if (!in_array(\PHP_SAPI, ['cli', 'phpdbg'], true) && !headers_sent()) {
            header('HTTP/1.1 500 Internal Server Error');
        }

        foreach ($vars as $var) {
            if (method_exists($var, 'toArray')) {
                return VarDumper::dump($var->toArray());
            } else {
                return Vardumper::dump($var);
            }
        }
    }
}