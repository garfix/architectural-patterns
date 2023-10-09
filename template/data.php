<?php

const CAT_PRESENTATION = 'presentation';
const CAT_SEPARATION_OF_CONCERNS = 'separation of concerns';
const CAT_CENTRAL_DATA = 'central data';
const CAT_BUSINESS_LOGIC = 'business logic';
const CAT_HIGH_PERFORMANCE = 'performance';
const CAT_PROBLEM_SOLVER = 'problem solver';
const CAT_MANAGING_SERVICES = 'managing services';
const CAT_STATE_BASED = 'stated based';
const CAT_ROBUSTNESS = 'robustness';
const CAT_FLEXIBILITY = 'flexibility';
const CAT_EVENT_BASED = 'event based';
const CAT_DISTRIBUTED = 'distributed computing'; // different machines, networked
const CAT_INTERPRETED = 'interpreted';

$categories = [
    ["code" => CAT_PRESENTATION, "name" => 'Presentation'],
    ["code" => CAT_PROBLEM_SOLVER, "name" => 'Problem solver'],
    ["code" => CAT_SEPARATION_OF_CONCERNS, "name" => 'Separation of concerns'],
    ["code" => CAT_HIGH_PERFORMANCE, "name" => 'High performance'],
    ["code" => CAT_MANAGING_SERVICES, "name" => 'Managing participants'],
    ["code" => CAT_BUSINESS_LOGIC, "name" => 'Business logic central'],
    ["code" => CAT_CENTRAL_DATA, "name" => 'Data store central'],
    ["code" => CAT_STATE_BASED, "name" => 'State based'],
    ["code" => CAT_EVENT_BASED, "name" => 'Event based'],
    ["code" => CAT_ROBUSTNESS, "name" => 'Robustness'],
    ["code" => CAT_FLEXIBILITY, "name" => 'Flexibility'],
    ["code" => CAT_DISTRIBUTED, "name" => 'Distributed computing'],
    ["code" => CAT_INTERPRETED, "name" => 'Interpreted'],
];

$patterns = [
    [
        "name" => "Model-View-Controller",
        "image" => "mvc_2.jpg",
        "link" => "model-view-controller",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Presentation-Abstraction-Control",
        "image" => "pac_1.jpg",
        "link" => "presentation-abstraction-control",
        "categories" => [CAT_PRESENTATION]
    ],
    [
        "name" => "Pipe and Filter",
        "image" => "pipe_and_filter_2.jpg",
        "link" => "pipe-and-filter",
        "categories" => [CAT_FLEXIBILITY]
    ],
    [
        "name" => "Layered",
        "image" => "layers_1.jpg",
        "link" => "layered",
        "categories" => [CAT_SEPARATION_OF_CONCERNS]
    ],
    [
        "name" => "Microkernel",
        "image" => "microkernel.drawio.png",
        "link" => "microkernel",
        "categories" => [CAT_SEPARATION_OF_CONCERNS]
    ],
    [
        "name" => "N-Tier",
        "image" => "tiers_1.jpg",
        "link" => "n-tier",
        "categories" => [CAT_SEPARATION_OF_CONCERNS, CAT_DISTRIBUTED]
    ],
    [
        "name" => "Repository",
        "image" => "repository.drawio.png",
        "link" => "repository",
        "categories" => [CAT_CENTRAL_DATA]
    ],
    [
        "name" => "Blackboard",
        "image" => "blackboard.drawio.png",
        "link" => "blackboard",
        "categories" => [CAT_CENTRAL_DATA, CAT_PROBLEM_SOLVER]
    ],
    [
        "name" => "Finite State Machine",
        "image" => "fsm.drawio.png",
        "link" => "finite-state-machine",
        "categories" => [CAT_STATE_BASED, CAT_INTERPRETED]
    ],
    [
        "name" => "Process Control",
        "image" => "process_control_1.jpg",
        "link" => "process-control",
        "categories" => []
    ],
    [
        "name" => "Multi-Agent System",
        "image" => "mas_1.jpg",
        "link" => "multi-agent-system",
        "categories" => []
    ],
    [
        "name" => "Broker",
        "image" => "broker.drawio.png",
        "link" => "broker",
        "categories" => [CAT_FLEXIBILITY, CAT_DISTRIBUTED]
    ],
    [
        "name" => "Master-Slave",
        "image" => "masterslave.jpg",
        "link" => "master-slave",
        "categories" => [CAT_MANAGING_SERVICES, CAT_DISTRIBUTED]
    ],
    [
        "name" => "Interpreter",
        "image" => "vm.jpg",
        "link" => "interpreter",
        "categories" => [CAT_INTERPRETED]
    ],
    [
        "name" => "Publish-Subscribe",
        "image" => "event-bus-1.png",
        "link" => "publish-subscribe",
        "categories" => [CAT_EVENT_BASED]
    ],
    [
        "name" => "Message queue",
        "image" => "message-queue.drawio.png",
        "link" => "message-queue",
        "categories" => [CAT_EVENT_BASED]
    ],
    [
        "name" => "Structural model",
        "image" => "structural_model_1.jpg",
        "link" => "structural-model",
        "categories" => []
    ],
    [
        "name" => "Ports and Adapters",
        "image" => "ports-and-adapters.png",
        "link" => "ports-and-adapters",
        "categories" => [CAT_BUSINESS_LOGIC]
    ],
    [
        "name" => "Peer to Peer",
        "image" => "peer-to-peer.png",
        "link" => "peer-to-peer",
        "categories" => [CAT_MANAGING_SERVICES, CAT_ROBUSTNESS, CAT_DISTRIBUTED]
    ],
    [
        "name" => "Event Sourcing",
        "image" => "event-sourcing-1.png",
        "link" => "event-sourcing",
        "categories" => [CAT_CENTRAL_DATA]
    ],
    [
        "name" => "Command-Query Responsibility Segregation",
        "image" => "cqrs-1.png",
        "link" => "cqrs",
        "categories" => [CAT_HIGH_PERFORMANCE]
    ],
    [
        "name" => "Monolith",
        "image" => "monolith.drawio.png",
        "link" => "monolith",
        "categories" => [CAT_DISTRIBUTED]
    ]
];

usort($patterns, function ($a, $b) {
    return ($a['name'] < $b['name']) ? -1 : 1;
});
