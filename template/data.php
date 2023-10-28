<?php

const CAT_PRESENTATION = 'presentation';
const CAT_GROUPING = 'separation of concerns';
const CAT_CENTRAL_DATA = 'central data';
const CAT_DOMAIN_LOGIC = 'business logic';
const CAT_HIGH_PERFORMANCE = 'performance';
const CAT_PROBLEM_SOLVER = 'problem solver';
const CAT_MANAGING_SERVICES = 'managing services';
const CAT_STATE_BASED = 'stated based';
const CAT_ROBUSTNESS = 'robustness';
const CAT_FLEXIBILITY = 'flexibility';
const CAT_EVENT_BASED = 'event based';
const CAT_DISTRIBUTED = 'distributed computing'; // different machines, networked
const CAT_INTERPRETED = 'interpreted';
const CAT_CONTROL_FLOW = 'control flow';

$categories = [
    ["code" => CAT_GROUPING, "name" => 'Grouping',
        "description" => "Patterns that partition code in distinct areas"],
    ["code" => CAT_PRESENTATION, "name" => 'Presentation',
        "description" => "Patterns related to the Graphical User Interface"],
    ["code" => CAT_PROBLEM_SOLVER, "name" => 'Problem solving',
        "description" => "Patterns designed to solve problems"],
    ["code" => CAT_CENTRAL_DATA, "name" => 'Data central',
        "description" => "Data centered patterns"],
    ["code" => CAT_CONTROL_FLOW, "name" => 'Control flow',
        "description" => "Patterns whose main function is to determine what to do next"],
    ["code" => CAT_DISTRIBUTED, "name" => 'Distributed computing',
        "description" => "Multi-server patterns"],
    // ["code" => CAT_HIGH_PERFORMANCE, "name" => 'High performance',
    //     "description" => "Description"],
    // ["code" => CAT_MANAGING_SERVICES, "name" => 'Managing participants',
    //     "description" => "Description"],
    // ["code" => CAT_DOMAIN_LOGIC, "name" => 'Domain model central',
    //     "description" => "Description"],
    // ["code" => CAT_STATE_BASED, "name" => 'State based',
    //     "description" => "Description"],
    // ["code" => CAT_EVENT_BASED, "name" => 'Event based',
    //     "description" => "Description"],
    // ["code" => CAT_ROBUSTNESS, "name" => 'Robustness',
    //     "description" => "Description"],
    // ["code" => CAT_FLEXIBILITY, "name" => 'Flexibility',
    //     "description" => "Description"],
    // ["code" => CAT_INTERPRETED, "name" => 'Interpreted',
    //     "description" => "Description"],
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
        "categories" => [CAT_GROUPING, CAT_DISTRIBUTED]
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
        "categories" => [CAT_DISTRIBUTED, CAT_CENTRAL_DATA]
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
        "name" => "Blackboard",
        "image" => "blackboard.drawio.png",
        "link" => "blackboard",
        "categories" => [CAT_PROBLEM_SOLVER]
    ],
    [
        "name" => "Process Control",
        "image" => "process_control_1.jpg",
        "link" => "process-control",
        "categories" => [CAT_PROBLEM_SOLVER]
    ],
    [
        "name" => "Multi-Agent System",
        "image" => "mas_1.jpg",
        "link" => "multi-agent-system",
        "categories" => [CAT_PROBLEM_SOLVER]
    ],
    [
        "name" => "Inference Engine",
        "image" => "rule-based.drawio.png",
        "link" => "inference-engine",
        "categories" => [CAT_PROBLEM_SOLVER]
    ],
    [
        "name" => "Agent",
        "image" => "agent.drawio.png",
        "link" => "agent",
        "categories" => [CAT_PROBLEM_SOLVER]
    ],
    [
        "name" => "Layered",
        "image" => "layers_1.jpg",
        "link" => "layered",
        "categories" => [CAT_GROUPING]
    ],
    [
        "name" => "Microkernel",
        "aliases" => "Kernel",
        "image" => "microkernel.drawio.png",
        "link" => "microkernel",
        "categories" => [CAT_GROUPING]
    ],
    [
        "name" => "Hexagonal Architecture",
        "aliases" => "Ports and Adapters, Onion Architecture, Clean Architecture, Boundary-Control-Entity",
        "image" => "ports-and-adapters.drawio.png",
        "link" => "hexagonal",
        "categories" => [CAT_GROUPING]
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
        "categories" => [CAT_CENTRAL_DATA]
    ],
    [
        "name" => "CQRS",
        "aliases" => "Command-Query Responsibility Segregation",
        "image" => "cqrs-1.png",
        "link" => "cqrs",
        "categories" => [CAT_CENTRAL_DATA]
    ],
];

usort($patterns, function ($a, $b) {
    return ($a['name'] < $b['name']) ? -1 : 1;
});

$indexed = [];
foreach ($patterns as $pattern) {
    $indexed[$pattern['name']] = $pattern;
}
