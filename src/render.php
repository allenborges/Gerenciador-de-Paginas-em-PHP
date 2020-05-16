<?php

function render($content, $template, array $data = []) // content onde vai estar o HTML do conteúdo template - Onde vai estar o Html do template  e um Array com as váriaveis que quero passar para o meu template.

{
    $content = __DIR__ . '/templates/' . $content . '.tpl.php';
    return include __DIR__ . '/templates/' . $template . '.tpl.php'; // dando include nqa página do meu template  admin.tpl.php
}
