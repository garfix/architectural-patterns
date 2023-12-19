<?php

include 'functions.php';

const CAT_PRESENTATION = 'presentation';
const CAT_AREAS = 'global';
const CAT_DATA = 'data-patterns';
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

$pages = [
    CAT_AREAS,
    CAT_MODULES,
    CAT_CLASS,
    CAT_DATA,
    CAT_CONTROL_FLOW,
    CAT_PROBLEM_SOLVING,
    CAT_CROSS_CUTTING,
    CAT_PRESENTATION,
    CAT_ACCESS_CONTROL,
    CAT_DISTRIBUTED,
    CAT_ENVIRONMENT,
];

$categories = [
    ["code" => CAT_AREAS, "name" => 'Layers',
        "description" => "Patterns that partition the code base in distinct areas and determine what's most basic",
        "patterns" => ["Smart-UI", "Document-View", "Layers", "Traditional Model-View-Controller", "Model-View-Adapter", "Model-View-Viewmodel", "Hexagonal Architecture", "Microkernel", "Software Framework", "Bounded Context"]],
    ["code" => CAT_MODULES, "name" => 'Modules / Components',
        "description" => "Patterns within and between modules and components. There are differences between modules and components but the patterns described here are applicable to both. I will use the name 'module' to represent them.",
        "patterns" => ["Module", "Component", "Acyclic Dependency Graph", "Feature Flags", "Plugin", "Dependency Inversion Principle"]],
    ["code" => CAT_CLASS, "name" => 'Classes / Interfaces',
        "description" => "Patterns for classes and interfaces",
        "children" => [CAT_CLASS_PRINCIPLES],
        "patterns" => ["Entity", "Use case"]],
    ["code" => CAT_CLASS_PRINCIPLES, "name" => 'Principles',
        "description" => "Principles for classes and interfaces",
        "patterns" => ["Single Responsibility Principle", "Open-Closed Principle", "Liskov Substitution Principle", "Interface Segregation Principle"]],
    ["code" => CAT_PRESENTATION, "name" => 'Presentation',
        "description" => "Patterns related to the Graphical User Interface",
        "patterns" => ["Hierarchical MVC", "Menu Navigation", "Accessibility"]],
    ["code" => CAT_PROBLEM_SOLVING, "name" => 'Problem solving',
        "description" => "Patterns designed to solve problems",
        "patterns" => ["Search", "Inference Engine", "Planning", "Neural Network", "Agent", "Multi-Agent System", "Blackboard", "Process Control"]],
    ["code" => CAT_DATA, "name" => 'Data',
        "description" => "Patterns that focus on the data of the application",
        "patterns" => ["Repository", "Event Sourcing", "CQRS", "Index", "Cache", "ETL", "Data Warehouse", "Data Cube"]],
    ["code" => CAT_CONTROL_FLOW, "name" => 'Control flow',
        "description" => "Patterns that focus on the way the code is executed",
        "patterns" => ["Pipe and Filter", "Parallel Programming", "Finite State Machine", "Interpreter", "Publish-Subscribe", "Message Queue", "Game Loop", "Lifecycle Hooks"]],
    ["code" => CAT_DISTRIBUTED, "name" => 'Distributed computing',
        "description" => "Patterns that disribute the application over multiple servers",
        "patterns" => ["Client-Server", "N-Tier", "Broker", "Repository", "Master-Slave", "Peer to Peer", "Monolith", "Parallel Programming", "Load Balancing", "Serverless", "Space-Based", "Data Replication"]],
    ["code" => CAT_CROSS_CUTTING, "name" => 'Cross-cutting concerns',
        "description" => "Patterns that provide a specific function in many distinct areas of the code base",
        "patterns" => ["Logging", "Error Handling", "Data Validation", "Internationalization", "Accessibility"]],
    ["code" => CAT_ACCESS_CONTROL, "name" => 'Access control',
        "description" => "Control who has access to the system and to what parts of the system",
        "children" => [CAT_AUTHENTICATION, CAT_AUTHORIZATION],
        "patterns" => []],
    ["code" => CAT_AUTHENTICATION, "name" => 'Authentication',
        "description" => "Determine that the user is who they claim to be",
        "patterns" => ["Login", "Single Sign-on", "Federated Identity"]],
    ["code" => CAT_AUTHORIZATION, "name" => 'Authorization',
        "description" => "Describe who has access to what",
        "patterns" => ["Access Control List", "Role-based Access Control"]],
    ["code" => CAT_ENVIRONMENT, "name" => 'App Environment',
        "description" => "Patterns that are not part of the application in the narrow sense, but are nevertheless part of its broader environment",
        "children" => [CAT_TESTING, CAT_MONITORING],
        "patterns" => ["Deployment"]],
    ["code" => CAT_TESTING, "name" => 'Testing',
        "description" => "Patterns that ensure that some aspect of the application meets a criterium",
        "patterns" => ["Functional tests", "Frontend tests", "Security tests", "Performance tests", "Compatibility tests"]],
    ["code" => CAT_MONITORING, "name" => 'Monitoring',
        "description" => "Following aspects of the activity of the system by an external service",
        "patterns" => ["Performance Monitoring", "User-activity Monitoring"]],
];

$patterns = [
    [
        "name" => "Repository",
        "keywords" => "Database",
        "image" => "repository.drawio.png",
        "link" => "repository"
    ],
    [
        "name" => "Event Sourcing",
        "keywords" => "Block chain",
        "image" => "event-sourcing.drawio.png",
        "link" => "event-sourcing"
    ],
    [
        "name" => "CQRS",
        "keywords" => "Command-Query Responsibility Segregation",
        "image" => "cqrs-1.png",
        "link" => "cqrs"
    ],
    [
        "name" => "Index",
        "keywords" => "Search engine, Information retrieval",
        "image" => "index.drawio.png",
        "link" => "indexing"
    ],
    [
        "name" => "Cache",
        "image" => "caching.drawio.png",
        "link" => "cache"
    ],
    [
        "name" => "ETL",
        "keywords" => "Extract Transform Load",
        "image" => "etl.drawio.png",
        "link" => "etl"
    ],
    [
        "name" => "Data Warehouse",
        "keywords" => "Business Intelligence",
        "image" => "data-warehouse.drawio.png",
        "link" => "data-warehouse"
    ],
    [
        "name" => "Data Cube",
        "keywords" => "Timeseries, Array DBMS",
        "image" => "data-cube.drawio.png",
        "link" => "data-cube"
    ],
    [
        "name" => "Client-Server",
        "image" => "client-server.drawio.png",
        "link" => "client-server"
    ],
    [
        "name" => "N-Tier",
        "keywords" => "Multitier",
        "image" => "n-tier.drawio.png",
        "link" => "n-tier"
    ],
    [
        "name" => "Broker",
        "keywords" => "Service Oriented Architecture, Microservices, API, Hub-and-spoke, Event-bus",
        "image" => "broker.drawio.png",
        "link" => "broker"
    ],
    [
        "name" => "Master-Slave",
        "image" => "master-and-slave.drawio.png",
        "link" => "master-slave"
    ],
    [
        "name" => "Peer to Peer",
        "image" => "peer-to-peer.drawio.png",
        "link" => "peer-to-peer"
    ],
    [
        "name" => "Monolith",
        "image" => "monolith.drawio.png",
        "link" => "monolith"
    ],
    [
        "name" => "Parallel Programming",
        "image" => "parallel-programming.drawio.png",
        "link" => "parallel-programming"
    ],
    [
        "name" => "Load Balancing",
        "image" => "load-balancing.drawio.png",
        "link" => "load-balancing"
    ],
    [
        "name" => "Serverless",
        "image" => "serverless.drawio.png",
        "link" => "serverless"
    ],
    [
        "name" => "Space-Based",
        "image" => "space-based.drawio.png",
        "link" => "space-based"
    ],
    [
        "name" => "Data Replication",
        "image" => "replication.drawio.png",
        "link" => "replication"
    ],
    [
        "name" => "Traditional Model-View-Controller",
        "image" => "model-view-controller.drawio.png",
        "keywords" => "Model-View-Updater",
        "link" => "model-view-controller"
    ],
    [
        "name" => "Model-View-Adapter",
        "keywords" => "Model-View-Presenter",
        "image" => "model-view-adapter.drawio.png",
        "link" => "model-view-adapter"
    ],
    [
        "name" => "Model-View-Viewmodel",
        "keywords" => "MVVM, Model-View-Binder",
        "image" => "model-view-viewmodel.drawio.png",
        "link" => "model-view-viewmodel"
    ],
    [
        "name" => "Hierarchical MVC",
        "keywords" => "Presentation-Abstraction-Control, Hierarchical model-view-controller",
        "image" => "hierarchical-component-ui.drawio.png",
        "link" => "hierarchical-ui"
    ],
    [
        "name" => "Accessibility",
        "image" => "accessibility.drawio.png",
        "link" => "accessibility"
    ],
    [
        "name" => "Menu Navigation",
        "keywords" => "Toolbar",
        "image" => "menu.drawio.png",
        "link" => "menu-navigation"
    ],
    [
        "name" => "Search",
        "image" => "search.drawio.png",
        "link" => "search"
    ],
    [
        "name" => "Inference Engine",
        "image" => "rule-based.drawio.png",
        "link" => "inference-engine"
    ],
    [
        "name" => "Planning",
        "image" => "planning.drawio.png",
        "link" => "planning"
    ],
    [
        "name" => "Neural Network",
        "keywords" => "Artificial Neural Network, Neural Net",
        "image" => "neural-network.drawio.png",
        "link" => "neural-network"
    ],
    [
        "name" => "Agent",
        "image" => "agent.drawio.png",
        "link" => "agent"
    ],
    [
        "name" => "Multi-Agent System",
        "image" => "multi-agent-system.drawio.png",
        "link" => "multi-agent-system"
    ],
    [
        "name" => "Blackboard",
        "image" => "blackboard.drawio.png",
        "link" => "blackboard"
    ],
    [
        "name" => "Process Control",
        "image" => "process-control.drawio.png",
        "link" => "process-control"
    ],
    [
        "name" => "Layers",
        "image" => "layered.drawio.png",
        "link" => "layers"
    ],
    [
        "name" => "Module",
        "image" => "module.drawio.png",
        "link" => "module"
    ],
    [
        "name" => "Acyclic Dependency Graph",
        "keywords" => "Dependency hierarchy",
        "image" => "dependency-graph.drawio.png",
        "link" => "acyclic-dependency-graph"
    ],
    [
        "name" => "Component",
        "image" => "component.drawio.png",
        "link" => "component"
    ],
    [
        "name" => "Microkernel",
        "keywords" => "Kernel",
        "image" => "microkernel.drawio.png",
        "link" => "microkernel"
    ],
    [
        "name" => "Hexagonal Architecture",
        "keywords" => "Ports and Adapters, Onion Architecture, Clean Architecture",
        "image" => "ports-and-adapters.drawio.png",
        "link" => "hexagonal"
    ],
    [
        "name" => "Plugin",
        "keywords" => "Add-on, Theme, Skin",
        "image" => "plugin.drawio.png",
        "link" => "plugin"
    ],
    [
        "name" => "Pipe and Filter",
        "image" => "pipe-and-filter.drawio.png",
        "link" => "pipe-and-filter"
    ],
    [
        "name" => "Finite State Machine",
        "image" => "fsm.drawio.png",
        "link" => "finite-state-machine"
    ],
    [
        "name" => "Interpreter",
        "image" => "interpreter.drawio.png",
        "link" => "interpreter"
    ],
    [
        "name" => "Publish-Subscribe",
        "keywords" => "Event bus, Event loop",
        "image" => "event-bus-1.png",
        "link" => "publish-subscribe"
    ],
    [
        "name" => "Message Queue",
        "keywords" => "Event bus, Event loop",
        "image" => "message-queue.drawio.png",
        "link" => "message-queue"
    ],
    [
        "name" => "Game Loop",
        "image" => "game-loop.drawio.png",
        "link" => "game-loop"
    ],
    [
        "name" => "Lifecycle Hooks",
        "image" => "lifecycle-hooks.drawio.png",
        "link" => "lifecycle-hooks"
    ],
    [
        "name" => "Logging",
        "image" => "logging.drawio.png",
        "link" => "logging"
    ],
    [
        "name" => "Error Handling",
        "image" => "error-handling.drawio.png",
        "link" => "error-handling"
    ],
    [
        "name" => "Data Validation",
        "image" => "data-validation.drawio.png",
        "link" => "data-validation"
    ],
    [
        "name" => "Feature Flags",
        "keywords" => "Feature Toggles",
        "image" => "feature-flags.drawio.png",
        "link" => "feature-flags"
    ],
    [
        "name" => "Functional tests",
        "image" => "functional-tests.drawio.png",
        "link" => "functional-tests"
    ],
    [
        "name" => "Frontend tests",
        "image" => "frontend-tests.drawio.png",
        "link" => "frontend-tests"
    ],
    [
        "name" => "Security tests",
        "image" => "security-tests.drawio.png",
        "link" => "security-tests"
    ],
    [
        "name" => "Performance tests",
        "image" => "performance-tests.drawio.png",
        "link" => "performance-tests"
    ],
    [
        "name" => "Compatibility tests",
        "keywords" => "Cross browser testing",
        "image" => "compatibility-tests.drawio.png",
        "link" => "compatibility-tests"
    ],
    [
        "name" => "Performance Monitoring",
        "image" => "performance-monitoring.drawio.png",
        "link" => "performance-monitoring"
    ],
    [
        "name" => "User-activity Monitoring",
        "image" => "user-activity-monitoring.drawio.png",
        "link" => "user-activity-monitoring"
    ],
    [
        "name" => "Deployment",
        "image" => "deployment.drawio.png",
        "link" => "deployment"
    ],
    [
        "name" => "Internationalization",
        "keywords" => "Translation, Localization, i18n, l10n",
        "image" => "i18n.drawio.png",
        "link" => "deployment"
    ],
    [
        "name" => "Login",
        "image" => "login.drawio.png",
        "link" => "login"
    ],
    [
        "name" => "Single Sign-on",
        "keywords" => "SSO",
        "image" => "single-sign-on.drawio.png",
        "link" => "single-sign-on"
    ],
    [
        "name" => "Federated Identity",
        "image" => "federated-identity.drawio.png",
        "link" => "federated-identity"
    ],
    [
        "name" => "Access Control List",
        "keywords" => "ACL",
        "image" => "access-control-list.drawio.png",
        "link" => "access-control-list"
    ],
    [
        "name" => "Role-based Access Control",
        "keywords" => "RBAC",
        "image" => "role-based-access-control.drawio.png",
        "link" => "role-based-access-control"
    ],
    [
        "name" => "Liskov Substitution Principle",
        "image" => "lsp.drawio.png",
        "link" => "liskov-substitution-principle"
    ],
    [
        "name" => "Open-Closed Principle",
        "image" => "open-closed.drawio.png",
        "link" => "open-closed-principle"
    ],
    [
        "name" => "Interface Segregation Principle",
        "image" => "interface-segregation.drawio.png",
        "link" => "interface-segregation-principle"
    ],
    [
        "name" => "Dependency Inversion Principle",
        "image" => "dependency-inversion.drawio.png",
        "link" => "dependency-inversion-principle"
    ],
    [
        "name" => "Single Responsibility Principle",
        "image" => "single-responsibility.drawio.png",
        "link" => "single-responsibility-principle"
    ],
    [
        "name" => "Smart-UI",
        "image" => "smart-ui.drawio.png",
        "link" => "smart-ui"
    ],
    [
        "name" => "Document-View",
        "image" => "document-view.drawio.png",
        "link" => "document-view"
    ],
    [
        "name" => "Entity",
        "image" => "entity.drawio.png",
        "link" => "entity"
    ],
    [
        "name" => "Use case",
        "image" => "use-case.drawio.png",
        "link" => "use-case"
    ],
    [
        "name" => "Software Framework",
        "image" => "framework.drawio.png",
        "link" => "software-framework"
    ],
    [
        "name" => "Bounded Context",
        "keywords" => "Architectural boundaries",
        "image" => "boundaries.drawio.png",
        "link" => "bounded-context"
    ]
];

$sortedPatterns = $patterns;

usort($sortedPatterns, function ($a, $b) {
    return ($a['name'] < $b['name']) ? -1 : 1;
});

$indexed = [];
foreach ($patterns as $pattern) {
    $indexed[$pattern['name']] = $pattern;
}
