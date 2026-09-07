<?php

include 'functions.php';

const CAT_LOGIC = 'logic';
const CAT_PRESENTATION = 'presentation';
const CAT_ANIMATION = 'animation';
const CAT_SYSTEMS = 'systems';
const CAT_SYSTEMS_COMPOSITION = 'system-composition';
const CAT_LANGUAGE_FEATURES = 'language-features';
const CAT_ARCHITECTURAL_PARADIGMS = 'architectural-paradigms';
const CAT_DATA = 'data-patterns';
const CAT_DATA_FORMAT = 'data-format';
const CAT_DATA_INTERACTION = 'data-interaction';
const CAT_DATA_STORE = 'data-store';
const CAT_DATA_LOCKING = 'data-locking';
const CAT_PROBABILISTIC = 'probabilistic-reasoning';
const CAT_SEARCH_OPTIMIZATION = 'search-optimization';
const CAT_EVOLUTIONARY = 'evolutionary-computation';
const CAT_SUPERVISED_LEARNING = 'supervised-learning';
const CAT_DEEP_LEARNING = 'deep-learning-architectures';
const CAT_UNSUPERVISED_LEARNING = 'unsupervised-learning';
const CAT_REINFORCEMENT_LEARNING = 'reinforcement-learning';
const CAT_SYMBOLIC_REASONING = 'symbolic-reasoning';
const CAT_GRAPHICAL_MODELS = 'graphical-structured-models';
const CAT_PROBLEM_SOLVING = 'problem-solving';
const CAT_CROSS_CUTTING = 'cross-cutting-concerns';
const CAT_DISTRIBUTED = 'distributed-computing';
const CAT_CONTROL_FLOW = 'control-flows';
const CAT_ACCESS_CONTROL = 'access-control';
const CAT_TESTING = 'testing';
const CAT_ENVIRONMENT = 'app-environment';
const CAT_MONITORING = 'monitoring';
const CAT_AUTHENTICATION = 'authentication';
const CAT_AUTHORIZATION = 'authorization';
const CAT_CLASS = 'class';
const CAT_CLASS_PRINCIPLES = 'class-principles';
const CAT_MODULES = 'modules';
const CAT_MODULE_PRINCIPLES = 'module-principles';
const CAT_CHANGE = 'change';
const CAT_PRESENTATION_KINDS = 'presentation-kinds';
const CAT_UI = 'ui';
const CAT_UX = 'ux';



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