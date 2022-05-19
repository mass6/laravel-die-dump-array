<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dda')) {
    function dda(...$vars)
    {
        foreach ($vars as $var) {
            if (method_exists($var, 'toArray')) {
                return Vardumper::dump($var->toArray());
            } else {
                return Vardumper::dump($var);
            }
        }
        die(1);
    }
}

if (!function_exists('da')) {
    function da(...$vars)
    {
        foreach ($vars as $var) {
            if (method_exists($var, 'toArray')) {
                return VarDumper::dump($var->toArray());
            } else {
                return Vardumper::dump($var);
            }
        }
    }
}