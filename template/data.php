<?php

include 'functions.php';

const CAT_ELEMENTS = 'elements';
const CAT_PRESENTATION = 'presentation';
const CAT_AREAS = 'areas';
const CAT_DATA = 'data-patterns';
const CAT_PROBLEM_SOLVING = 'problem-solving';
const CAT_CROSS_CUTTING = 'cross-cutting-concerns';
const CAT_DISTRIBUTED = 'distributed-computing';
const CAT_CONTROL_FLOW = 'control-flows';
const CAT_ACCESS_CONTROL = 'access-control';
const CAT_TESTING = 'testing';
const CAT_ENVIRONMENT = 'app-environment';
const CAT_MONITORING = 'monitoring';

$pages = [
    // CAT_ELEMENTS,
    CAT_AREAS,
    CAT_DATA,
    CAT_PRESENTATION,
    CAT_CONTROL_FLOW,
    CAT_PROBLEM_SOLVING,
    CAT_CROSS_CUTTING,
    CAT_DISTRIBUTED,
    CAT_ENVIRONMENT,
];

$categories = [
    ["code" => CAT_ELEMENTS, "name" => 'Elements',
        "description" => "Basic building blocks for an application"],
    ["code" => CAT_AREAS, "name" => 'Code areas',
        "description" => "Patterns that partition the code base in distinct areas and determine what's most basic"],
    ["code" => CAT_PRESENTATION, "name" => 'Presentation',
        "description" => "Patterns related to the Graphical User Interface"],
    ["code" => CAT_PROBLEM_SOLVING, "name" => 'Problem solving',
        "description" => "Patterns designed to solve problems"],
    ["code" => CAT_DATA, "name" => 'Data',
        "description" => "Patterns that focus on the data of the application"],
    ["code" => CAT_CONTROL_FLOW, "name" => 'Control flow',
        "description" => "Patterns that focus on the way the code is executed"],
    ["code" => CAT_DISTRIBUTED, "name" => 'Distributed computing',
        "description" => "Patterns that disribute the application over multiple servers"],
    ["code" => CAT_CROSS_CUTTING, "name" => 'Cross-cutting concerns',
        "description" => "Patterns that provide a specific function in many distinct areas of the code base",
        "children" => [CAT_ACCESS_CONTROL]],
    ["code" => CAT_ACCESS_CONTROL, "name" => 'Access control',
        "description" => "Patterns that describe who has access to what"],
    ["code" => CAT_ENVIRONMENT, "name" => 'App Environment',
        "description" => "Patterns that are not part of the application in the narrow sense, but are nevertheless part of its broader environment",
        "children" => [CAT_TESTING, CAT_MONITORING]],
    ["code" => CAT_TESTING, "name" => 'Testing',
        "description" => "Patterns that ensure that some aspect of the application meets a criterium"],
    ["code" => CAT_MONITORING, "name" => 'Monitoring',
        "description" => "Following aspects of the activity of the system by an external service"],
];

$patterns = [
    [
        "name" => "Broker",
        "keywords" => "Service Oriented Architecture, Microservices, API, Hub-and-spoke, Event-bus",
        "image" => "broker.drawio.png",
        "link" => "broker",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "Master-Slave",
        "image" => "master-and-slave.drawio.png",
        "link" => "master-slave",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "N-Tier",
        "keywords" => "Client-Server, Multitier",
        "image" => "n-tier.drawio.png",
        "link" => "n-tier",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "Peer to Peer",
        "image" => "peer-to-peer.drawio.png",
        "link" => "peer-to-peer",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "Monolith",
        "image" => "monolith.drawio.png",
        "link" => "monolith",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "Parallel Programming",
        "image" => "parallel-programming.drawio.png",
        "link" => "parallel-programming",
        "categories" => [CAT_DISTRIBUTED, CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Load Balancing",
        "image" => "load-balancing.drawio.png",
        "link" => "load-balancing",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "Serverless",
        "image" => "serverless.drawio.png",
        "link" => "serverless",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "Space-Based",
        "image" => "space-based.drawio.png",
        "link" => "space-based",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "Repository",
        "keywords" => "Database",
        "image" => "repository.drawio.png",
        "link" => "repository",
        "categories" => [CAT_DISTRIBUTED, CAT_DATA]
    ],
    [
        "name" => "Data Replication",
        "image" => "replication.drawio.png",
        "link" => "replication",
        "categories" => [CAT_DISTRIBUTED, CAT_DATA]
    ],
    [
        "name" => "Model-View-Controller",
        "image" => "model-view-controller.drawio.png",
        "keywords" => "Model-View-Updater",
        "link" => "model-view-controller",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Model-View-Adapter",
        "keywords" => "Model-View-Presenter",
        "image" => "model-view-adapter.drawio.png",
        "link" => "model-view-adapter",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Model-View-Viewmodel",
        "keywords" => "MVVM, Model-View-Binder",
        "image" => "model-view-viewmodel.drawio.png",
        "link" => "model-view-viewmodel",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Hierarchical UI",
        "keywords" => "Presentation-Abstraction-Control, Hierarchical model-view-controller",
        "image" => "hierarchical-component-ui.drawio.png",
        "link" => "hierarchical-ui",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Menu Navigation",
        "keywords" => "Toolbar",
        "image" => "menu.drawio.png",
        "link" => "menu-navigation",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Blackboard",
        "image" => "blackboard.drawio.png",
        "link" => "blackboard",
        "categories" => [CAT_PROBLEM_SOLVING]
    ],
    [
        "name" => "Process Control",
        "image" => "process-control.drawio.png",
        "link" => "process-control",
        "categories" => [CAT_PROBLEM_SOLVING]
    ],
    [
        "name" => "Multi-Agent System",
        "image" => "multi-agent-system.drawio.png",
        "link" => "multi-agent-system",
        "categories" => [CAT_PROBLEM_SOLVING]
    ],
    [
        "name" => "Inference Engine",
        "image" => "rule-based.drawio.png",
        "link" => "inference-engine",
        "categories" => [CAT_PROBLEM_SOLVING]
    ],
    [
        "name" => "Agent",
        "image" => "agent.drawio.png",
        "link" => "agent",
        "categories" => [CAT_PROBLEM_SOLVING]
    ],
    [
        "name" => "Search",
        "image" => "search.drawio.png",
        "link" => "search",
        "categories" => [CAT_PROBLEM_SOLVING]
    ],
    [
        "name" => "Planning",
        "image" => "planning.drawio.png",
        "link" => "planning",
        "categories" => [CAT_PROBLEM_SOLVING]
    ],
    [
        "name" => "Layered",
        "image" => "layered.drawio.png",
        "link" => "layered",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Modules",
        "image" => "modules.drawio.png",
        "link" => "modules",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Component",
        "image" => "component.drawio.png",
        "link" => "component",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Microkernel",
        "keywords" => "Kernel",
        "image" => "microkernel.drawio.png",
        "link" => "microkernel",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Hexagonal Architecture",
        "keywords" => "Ports and Adapters, Onion Architecture, Clean Architecture",
        "image" => "ports-and-adapters.drawio.png",
        "link" => "hexagonal",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Plugin",
        "keywords" => "Add-on, Theme, Skin",
        "image" => "plugin.drawio.png",
        "link" => "plugin",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Pipe and Filter",
        "image" => "pipe-and-filter.drawio.png",
        "link" => "pipe-and-filter",
        "categories" => [CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Finite State Machine",
        "image" => "fsm.drawio.png",
        "link" => "finite-state-machine",
        "categories" => [CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Interpreter",
        "image" => "interpreter.drawio.png",
        "link" => "interpreter",
        "categories" => [CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Publish-Subscribe",
        "keywords" => "Event bus, Event loop",
        "image" => "event-bus-1.png",
        "link" => "publish-subscribe",
        "categories" => [CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Message Queue",
        "keywords" => "Event bus, Event loop",
        "image" => "message-queue.drawio.png",
        "link" => "message-queue",
        "categories" => [CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Game Loop",
        "image" => "game-loop.drawio.png",
        "link" => "game-loop",
        "categories" => [CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Event Sourcing",
        "keywords" => "Block chain",
        "image" => "event-sourcing.drawio.png",
        "link" => "event-sourcing",
        "categories" => [CAT_DATA]
    ],
    [
        "name" => "CQRS",
        "keywords" => "Command-Query Responsibility Segregation",
        "image" => "cqrs-1.png",
        "link" => "cqrs",
        "categories" => [CAT_DATA]
    ],
    [
        "name" => "Caching",
        "image" => "caching.drawio.png",
        "link" => "caching",
        "categories" => [CAT_CROSS_CUTTING]
    ],
    [
        "name" => "Role-based Access Control",
        "keywords" => "RBAC",
        "image" => "role-based-access-control.drawio.png",
        "link" => "role-based-access-control",
        "categories" => [CAT_ACCESS_CONTROL]
    ],
    [
        "name" => "Access Control List",
        "keywords" => "ACL",
        "image" => "access-control-list.drawio.png",
        "link" => "access-control-list",
        "categories" => [CAT_ACCESS_CONTROL]
    ],
    [
        "name" => "Logging",
        "image" => "logging.drawio.png",
        "link" => "logging",
        "categories" => [CAT_CROSS_CUTTING]
    ],
    [
        "name" => "Error handling",
        "image" => "error-handling.drawio.png",
        "link" => "error-handling",
        "categories" => [CAT_CROSS_CUTTING, CAT_PRESENTATION]
    ],
    [
        "name" => "Functional tests",
        "image" => "functional-tests.drawio.png",
        "link" => "functional-tests",
        "categories" => [CAT_TESTING]
    ],
    [
        "name" => "Frontend tests",
        "image" => "frontend-tests.drawio.png",
        "link" => "frontend-tests",
        "categories" => [CAT_TESTING]
    ],
    [
        "name" => "Security tests",
        "image" => "security-tests.drawio.png",
        "link" => "security-tests",
        "categories" => [CAT_TESTING]
    ],
    [
        "name" => "Performance tests",
        "image" => "performance-tests.drawio.png",
        "link" => "performance-tests",
        "categories" => [CAT_TESTING]
    ],
    [
        "name" => "Compatibility tests",
        "keywords" => "Cross browser testing",
        "image" => "compatibility-tests.drawio.png",
        "link" => "compatibility-tests",
        "categories" => [CAT_TESTING]
    ],
    [
        "name" => "Performance Monitoring",
        "image" => "performance-monitoring.drawio.png",
        "link" => "performance-monitoring",
        "categories" => [CAT_MONITORING]
    ],
    [
        "name" => "User-activity Monitoring",
        "image" => "user-activity-monitoring.drawio.png",
        "link" => "user-activity-monitoring",
        "categories" => [CAT_MONITORING]
    ],
    [
        "name" => "Deployment",
        "image" => "deployment.drawio.png",
        "link" => "deployment",
        "categories" => [CAT_ENVIRONMENT]
    ],
    [
        "name" => "Internationalization",
        "keywords" => "Translation Localization i18n l10n",
        "image" => "i18n.drawio.png",
        "link" => "deployment",
        "categories" => [CAT_CROSS_CUTTING]
    ],
];

$sortedPatterns = $patterns;

usort($sortedPatterns, function ($a, $b) {
    return ($a['name'] < $b['name']) ? -1 : 1;
});

$indexed = [];
foreach ($patterns as $pattern) {
    $indexed[$pattern['name']] = $pattern;
}
