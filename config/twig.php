<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());
