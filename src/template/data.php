<?php
define('SITE_VERSION', '1.0.0');

include 'functions.php';

$pages = json_decode(file_get_contents(__DIR__ . '/pages.json'), true);
$categories = json_decode(file_get_contents(__DIR__ . '/categories.json'), true);
$patterns = json_decode(file_get_contents(__DIR__ . '/patterns.json'), true);


$sortedPatterns = $patterns;

usort($sortedPatterns, function ($a, $b) {
    return (strtolower($a['name']) < strtolower($b['name'])) ? -1 : 1;
});

$indexed = [];
foreach ($patterns as $pattern) {
    $indexed[$pattern['name']] = $pattern;
}