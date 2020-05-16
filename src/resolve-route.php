<?php

function resolve($route)
{


    $path = $_SERVER['PATH_INFO'] ?? '/';

    $route = '/^' . str_replace('/', '\/', $route) . '$/'; // toda URL que comece com barrra ('/' por '\/' substitui todas as strigs que eu encontrar por barra)
    //verifica uma string dinâmica através de uma regex

    if (preg_match($route, $path, $params)) { //verifica uma expressão regular 
        return $params; // variavel que apresente os parâmetro
    }
    return  false;
}
