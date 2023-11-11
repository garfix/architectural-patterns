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
const CAT_SECURITY = 'security';

$pages = [
    // CAT_ELEMENTS,
    CAT_AREAS,
    CAT_DATA,
    CAT_PRESENTATION,
    CAT_CONTROL_FLOW,
    CAT_PROBLEM_SOLVING,
    CAT_CROSS_CUTTING,
    CAT_DISTRIBUTED,
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
        "description" => "Patterns that provide a specific function is many distinct areas of the code base",
        "children" => [CAT_SECURITY]],
    ["code" => CAT_SECURITY, "name" => 'Security',
        "description" => "Patterns that describe who has access to what"],
];

$patterns = [
    [
        "name" => "Broker",
        "aliases" => "Service Oriented Architecture, Microservices, API, Hub-and-spoke, Event-bus",
        "image" => "broker.drawio.png",
        "link" => "broker",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "Master-Slave",
        "image" => "masterslave.jpg",
        "link" => "master-slave",
        "categories" => [CAT_DISTRIBUTED]
    ],
    [
        "name" => "N-Tier",
        "aliases" => "Client-Server, Multitier",
        "image" => "tiers_1.jpg",
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
        "aliases" => "Database",
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
        "aliases" => "Model-View-Updater",
        "link" => "model-view-controller",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Hierarchical UI",
        "aliases" => "Presentation-Abstraction-Control, Hierarchical model-view-controller",
        "image" => "hierarchical-component-ui.drawio.png",
        "link" => "hierarchical-ui",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Model-View-Viewmodel",
        "aliases" => "MVVM, Model-View-Binder",
        "image" => "model-view-viewmodel.drawio.png",
        "link" => "model-view-viewmodel",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Model-View-Adapter",
        "aliases" => "Model-View-Presenter",
        "image" => "model-view-adapter.drawio.png",
        "link" => "model-view-adapter",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Menu Navigation",
        "aliases" => "Toolbar",
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
        "image" => "process_control_1.jpg",
        "link" => "process-control",
        "categories" => [CAT_PROBLEM_SOLVING]
    ],
    [
        "name" => "Multi-Agent System",
        "image" => "mas_1.jpg",
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
        "image" => "layers_1.jpg",
        "link" => "layered",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Microkernel",
        "aliases" => "Kernel",
        "image" => "microkernel.drawio.png",
        "link" => "microkernel",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Hexagonal Architecture",
        "aliases" => "Ports and Adapters, Onion Architecture, Clean Architecture, Boundary-Control-Entity",
        "image" => "ports-and-adapters.drawio.png",
        "link" => "hexagonal",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Plugin",
        "aliases" => "Add-on, Theme, Skin",
        "image" => "plugin.drawio.png",
        "link" => "plugin",
        "categories" => [CAT_AREAS]
    ],
    [
        "name" => "Finite State Machine",
        "image" => "fsm.drawio.png",
        "link" => "finite-state-machine",
        "categories" => [CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Pipe and Filter",
        "image" => "pipe_and_filter_2.jpg",
        "link" => "pipe-and-filter",
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
        "aliases" => "Event bus, Event loop",
        "image" => "event-bus-1.png",
        "link" => "publish-subscribe",
        "categories" => [CAT_CONTROL_FLOW]
    ],
    [
        "name" => "Message Queue",
        "aliases" => "Event bus, Event loop",
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
        "image" => "event-sourcing-1.png",
        "link" => "event-sourcing",
        "categories" => [CAT_DATA]
    ],
    [
        "name" => "CQRS",
        "aliases" => "Command-Query Responsibility Segregation",
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
        "aliases" => "RBAC",
        "image" => "role-based-access-control.drawio.png",
        "link" => "role-based-access-control",
        "categories" => [CAT_SECURITY]
    ],
    [
        "name" => "Access Control List",
        "aliases" => "ACL",
        "image" => "access-control-list.drawio.png",
        "link" => "access-control-list",
        "categories" => [CAT_SECURITY]
    ],
    // [
    //     "name" => "Logging",
    //     "image" => "logging.drawio.png",
    //     "link" => "logging",
    //     "categories" => [CAT_CROSS_CUTTING]
    // ],
];

usort($patterns, function ($a, $b) {
    return ($a['name'] < $b['name']) ? -1 : 1;
});

$indexed = [];
foreach ($patterns as $pattern) {
    $indexed[$pattern['name']] = $pattern;
}
