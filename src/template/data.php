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
const CAT_UI = 'ui';
const CAT_UX = 'ux';

$pages = [
    "Code structure" => [
        CAT_LANGUAGE_FEATURES,
        CAT_CLASS,
        CAT_LOGIC,
        CAT_MODULES,
        CAT_SYSTEMS,
    ],
    "Code purpose" => [
        CAT_DATA,
        CAT_CROSS_CUTTING,
        CAT_CONTROL_FLOW,
        CAT_PROBLEM_SOLVING,
        CAT_PRESENTATION,
        CAT_ACCESS_CONTROL,
        CAT_CHANGE,
        CAT_DISTRIBUTED,
        CAT_ENVIRONMENT,
    ]
];

$categories = [
    ["code" => CAT_LOGIC, "name" => 'Types of code',
        "description" => "The types of code that are architecturally relevant. The idea is that every line of code falls in one of these categories. In a simple project all kinds are used in the same functions, files, and modules. A medium sized project could profit from separating some of these types in separate classes or layers. A large project can seriously benefit from separating all of them.",
        "patterns" => ["Business Logic", "Application Logic", "User Interface", "Presentation Logic", "Data Access Logic"]],
    ["code" => CAT_SYSTEMS, "name" => 'Systems',
        "description" => "Patterns that form the most basic structure of the system",
        "children" => [CAT_SYSTEMS_COMPOSITION],
        "patterns" => ["Layers", "Bounded Context"]],
    ["code" => CAT_SYSTEMS_COMPOSITION, "name" => 'Application',
        "description" => "Perspectives on how a system should be structured, based on what's perceived most important: ease-of-development, testability, or understandability",
        "patterns" => ["Smart-UI", "Document-View", "Traditional Model-View-Controller", "Model-View-Adapter", "Model-View-Viewmodel", "Hierarchical MVC", "Microkernel", "Software Framework", "Entity-Control-Boundary", "Hexagonal Architecture", "Data-Context-Interaction"]],
    ["code" => CAT_LANGUAGE_FEATURES, "name" => 'Language Features',
        "description" => "Discriminative programming language features. Most features like variables, loops and if/then statements are available in (almost) all languages. But others are specific to just one or two languages. If such feature is essential to your application, you may need to choose a language that supports it. And some features you may actually want to avoid.",
        "patterns" => ["Type system features", "Syntax features", "Data & Memory features", "Function features", "Object Oriented Programming features", "Functional programming features", "Reactive programming features", "Error handling features", "Concurrency features", "Miscellaneous features"]],
    // ["code" => CAT_ARCHITECTURAL_PARADIGMS, "name" => 'Architectural Paradigms',
    //     "description" => "Perspectives on how a system should be structured, based on what's perceived most important: ease-of-development, testability, or understandability",
    //     "patterns" => ["Traditional Model-View-Controller", "Model-View-Adapter", "Model-View-Viewmodel", "Hierarchical MVC", "Entity-Control-Boundary", "Hexagonal Architecture", "Data-Context-Interaction"]],
    ["code" => CAT_MODULES, "name" => 'Modules',
        "description" => "Patterns within and between modules. Closely related to modules are components and packages. The term 'module' used here reflects these as well.",
        "children" => [CAT_MODULE_PRINCIPLES],
        "patterns" => ["Module", "Component", "Feature Flags", "Plugin"]],
    ["code" => CAT_MODULE_PRINCIPLES, "name" => 'Principles for modules',
        "description" => "",
        "patterns" => ["Reuse/Release Equivalence Principle", "Common Closure Principle", "Common Reuse Principle", "Acyclic Dependencies Principle", "Stable Dependencies Principle", "Stable Abstractions Principle"]],
    ["code" => CAT_CLASS, "name" => 'Classes / Interfaces',
        "description" => "Patterns for classes and interfaces",
        "children" => [CAT_CLASS_PRINCIPLES],
        "patterns" => ["Entity", "Value Object", "Object Aggregate", "Data Transfer Object", "Query Object"]],
    ["code" => CAT_CLASS_PRINCIPLES, "name" => 'Principles',
        "description" => "Principles for classes and interfaces",
        "patterns" => ["Single Responsibility Principle", "Open-Closed Principle", "Liskov Substitution Principle", "Interface Segregation Principle", "Dependency Inversion Principle"]],
    ["code" => CAT_PRESENTATION, "name" => 'Presentation',
        "description" => "Patterns related to the User Interface",
        "children" => [CAT_UI, CAT_UX, CAT_ANIMATION],
        "patterns" => ["Command Line Interface", "Navigation Graph", "Menu Navigation", "Template Engine"]],
    ["code" => CAT_UI, "name" => 'User Interface',
        "description" => "Patterns related to User Interface (UI) design",
        "patterns" => ["Color", "Typeface", "Icon Set", "Page layout", "Accessibility"]],
    ["code" => CAT_UX, "name" => 'User Experience',
        "description" => "Patterns related to User Experience (UX) design",
        "patterns" => ["Clarity", "User control"]],
    ["code" => CAT_ANIMATION, "name" => 'Animation',
        "description" => "Patterns related to animated computer graphics",
        "patterns" => ["Graphics Pipeline", "Double Buffering"]],
    ["code" => CAT_PROBLEM_SOLVING, "name" => 'Problem solving',
        "description" => "Patterns designed to solve user problems",
        "children" => [CAT_PROBABILISTIC, CAT_SEARCH_OPTIMIZATION, CAT_EVOLUTIONARY, CAT_SUPERVISED_LEARNING, CAT_DEEP_LEARNING, CAT_UNSUPERVISED_LEARNING, CAT_REINFORCEMENT_LEARNING, CAT_SYMBOLIC_REASONING, CAT_GRAPHICAL_MODELS],
        "patterns" => ["Algorithm", "Heuristic", "Search", "Inference Engine", "Planning", "Decision Tree Learning", "Neural Network", "Generative AI", "Agent", "Multi-Agent System", "Blackboard", "Process Control", "Explainability"]],

    ["code" => CAT_PROBABILISTIC, "name" => 'Probabilistic / Statistical Reasoning',
        "description" => "Represent and reason with uncertainty using probabilistic models and statistical methods.",
        "patterns" => [
            "Bayesian Inference",
            "Markov Chain",
            "Hidden Markov Model",
            "Markov Decision Process",
            "Monte Carlo Method",
            "Markov Chain Monte Carlo",
            "Gaussian Process",
            "Kalman Filter",
            "Maximum Likelihood Estimation",
            "Regression Analysis",
        ]],

    ["code" => CAT_SEARCH_OPTIMIZATION, "name" => 'Search & Optimization',
        "description" => "Techniques for finding optimal or near-optimal solutions in large search spaces.",
        "patterns" => [
            "Gradient Descent",
            "Simulated Annealing",
            "A* Search Algorithm",
            "Hill Climbing",
            "Tabu Search",
            "Dynamic Programming",
            "Linear Programming",
        ]],

    ["code" => CAT_EVOLUTIONARY, "name" => 'Evolutionary & Nature-Inspired Computation',
        "description" => "Search methods inspired by biological or collective natural processes.",
        "patterns" => [
            "Genetic Algorithm",
            "Genetic Programming",
            "Particle Swarm Optimization",
            "Ant Colony Optimization",
            "Evolution Strategy",
        ]],

    ["code" => CAT_SUPERVISED_LEARNING, "name" => 'Supervised Learning',
        "description" => "Methods that learn mappings from inputs to labeled outputs.",
        "patterns" => [
            "Artificial Neural Network",
            "Decision Tree Learning",
            "Random Forest",
            "Gradient Boosting",
            "Support Vector Machine",
            "k-Nearest Neighbors",
            "Naive Bayes Classifier",
            "Linear Discriminant Analysis",
        ]],

    ["code" => CAT_DEEP_LEARNING, "name" => 'Deep Learning Architectures',
        "description" => "Specific neural network architectures that are widely used.",
        "patterns" => [
            "Convolutional Neural Network",
            "Recurrent Neural Network",
            "Long Short-Term Memory",
            "Transformer",
            "Generative Adversarial Network",
            "Diffusion Model",
            "Autoencoder",
        ]],

    ["code" => CAT_UNSUPERVISED_LEARNING, "name" => 'Unsupervised Learning',
        "description" => "Techniques that discover structure in data without labels.",
        "patterns" => [
            "k-Means Clustering",
            "Hierarchical Clustering",
            "DBSCAN",
            "Principal Component Analysis",
            "t-SNE",
            "Self-Organizing Map",
            "Association Rule Learning",
        ]],

    ["code" => CAT_REINFORCEMENT_LEARNING, "name" => 'Reinforcement Learning',
        "description" => "Agent-based learning from interaction with environments guided by rewards.",
        "patterns" => [
            "Q-Learning",
            "Temporal Difference Learning",
            "Policy Gradient Method",
            "Multi-Armed Bandit",
        ]],

    ["code" => CAT_SYMBOLIC_REASONING, "name" => 'Symbolic / Logic-Based Reasoning',
        "description" => "Rule- and logic-based techniques for explicit symbolic reasoning.",
        "patterns" => [
            "Expert System",
            "Constraint Satisfaction Problem",
            "Fuzzy Logic",
            "Automated Theorem Proving",
            "Case-Based Reasoning",
            "Semantic Network",
        ]],

    ["code" => CAT_GRAPHICAL_MODELS, "name" => 'Graphical / Structured Probabilistic Models',
        "description" => "Models that represent dependencies between variables as graphs.",
        "patterns" => [
            "Bayesian Network",
            "Markov Random Field",
            "Conditional Random Field",
            "Graph Neural Network",
        ]],
    ["code" => CAT_DATA, "name" => 'Data',
        "description" => "Patterns that focus on the data of the application",
        "children" => [CAT_DATA_STORE, CAT_DATA_INTERACTION, CAT_DATA_FORMAT, CAT_DATA_LOCKING],
        "patterns" => ["Event Sourcing", "Snapshot Sequence", "CQRS", "Index", "Cache", "Transaction", "Undo", "ETL", "Entity-Component-System", "Data Synchronization"]],
    ["code" => CAT_DATA_FORMAT, "name" => "Data formats",
        "description" => "Standard formats of data types",
        "patterns" => ["UNICODE", "Standardized Date Format", "Coordinated Universal Time"]],
    ["code" => CAT_DATA_STORE, "name" => "Data storage",
        "description" => "How data is stored",
        "patterns" => ["Repository", "Data Warehouse", "Data Cube"]],
    ["code" => CAT_DATA_INTERACTION, "name" => "Data interaction",
        "description" => "Ways of reading and writing data",
        "patterns" => ["ORM"]],
    ["code" => CAT_DATA_LOCKING, "name" => "Locking",
        "description" => "Handling concurrent access to data",
        "patterns" => ["Optimistic Locking", "Pessimistic Locking"]],
    ["code" => CAT_CONTROL_FLOW, "name" => 'Control flow',
        "description" => "Patterns that focus on the way the code is executed",
        "patterns" => ["Pipe and Filter", "Parallel Programming", "Finite State Machine", "Interpreter", "Publish-Subscribe", "Message Queue", "Game Loop", "Lifecycle Hooks"]],
    ["code" => CAT_DISTRIBUTED, "name" => 'Distributed computing',
        "description" => "Patterns that distribute the application over multiple servers",
        "patterns" => ["Monolith", "Client-Server", "N-Tier", "Broker", "Repository", "Master-Slave", "Peer to Peer", "Parallel Programming", "Load Balancing", "Serverless", "Space-Based", "Data Replication"]],
    ["code" => CAT_CROSS_CUTTING, "name" => 'Cross-cutting concerns',
        "description" => "Patterns that provide a specific function in many distinct areas of the code base",
        "patterns" => ["Logging", "Error Handling", "Data Validation", "Internationalization", "Coding Conventions", "Ubiquitous Language"]],
    ["code" => CAT_ACCESS_CONTROL, "name" => 'Access control',
        "description" => "Control who has access to the system and to what parts of the system",
        "children" => [CAT_AUTHENTICATION, CAT_AUTHORIZATION],
        "patterns" => []],
    ["code" => CAT_CHANGE, "name" => 'Change',
        "description" => "Management of code changes",
        "patterns" => ["Version Control", "Software Versioning"]],
    ["code" => CAT_AUTHENTICATION, "name" => 'Authentication',
        "description" => "Determine that the user is who they claim to be",
        "patterns" => ["Login", "Single Sign-on", "Federated Identity"]],
    ["code" => CAT_AUTHORIZATION, "name" => 'Authorization',
        "description" => "Describe who has access to what",
        "patterns" => ["Access Control List", "Role-based Access Control"]],
    ["code" => CAT_ENVIRONMENT, "name" => 'App Environment',
        "description" => "Patterns that are not part of the application in the narrow sense, but are nevertheless part of its broader environment",
        "children" => [CAT_TESTING, CAT_MONITORING],
        "patterns" => ["Containerization", "Deployment", "User Manual", "Software license"]],
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
        "keywords" => "Single tier",
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
        "name" => "Acyclic Dependencies Principle",
        "keywords" => "Dependency hierarchy",
        "image" => "dependency-graph.drawio.png",
        "link" => "acyclic-dependencies-principle"
    ],
    [
        "name" => "Stable Abstractions Principle",
        "image" => "stable-abstractions-principle.drawio.png",
        "link" => "stable-abstractions-principle"
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
        "keywords" => "Ports and Adapters, Onion Architecture, Clean Architecture, Functional Core / Imperative Shell",
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
        "keywords" => "CI/CD",
        "image" => "deployment.drawio.png",
        "link" => "deployment"
    ],
    [
        "name" => "Internationalization",
        "keywords" => "Translation, Localization, i18n, l10n",
        "image" => "i18n.drawio.png",
        "link" => "localization"
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
        "name" => "Software Framework",
        "image" => "framework.drawio.png",
        "link" => "software-framework"
    ],
    [
        "name" => "Bounded Context",
        "keywords" => "Architectural boundaries",
        "image" => "boundaries.drawio.png",
        "link" => "bounded-context"
    ],
    [
        "name" => "Entity-Control-Boundary",
        "keywords" => " Entity-Boundary-Control, Boundary-Control-Entity",
        "image" => "entity-control-boundary.drawio.png",
        "link" => "entity-control-boundary"
    ],
    [
        "name" => "Value Object",
        "image" => "value-object.drawio.png",
        "link" => "value-object"
    ],
    [
        "name" => "Business Logic",
        "keywords" => "Domain Logic",
        "image" => "business-logic.drawio.png",
        "link" => "business-logic"
    ],
    // [
    //     "name" => "Controller Logic",
    //     "image" => "controller-logic.drawio.png",
    //     "link" => "controller-logic"
    // ],
    [
        "name" => "Application Logic",
        "keywords" => "Use cases",
        "image" => "application-logic.drawio.png",
        "link" => "application-logic"
    ],
    [
        "name" => "Presentation Logic",
        "keywords" => "View Logic",
        "image" => "presentation-logic.drawio.png",
        "link" => "presentation-logic"
    ],
    [
        "name" => "User Interface",
        "image" => "user-interface.drawio.png",
        "link" => "user-interface"
    ],
    [
        "name" => "Data Access Logic",
        "image" => "data-access-logic.drawio.png",
        "link" => "data-access-logic"
    ],
    // [
    //     "name" => "Tests",
    //     "image" => "tests.drawio.png",
    //     "link" => "tests"
    // ],
    [
        "name" => "Entity-Component-System",
        "image" => "entity-component-system.drawio.png",
        "link" => "entity-component-system",
    ],
    [
        "name" => "Data-Context-Interaction",
        "image" => "data-context-interaction.drawio.png",
        "link" => "data-context-interaction",
    ],
    [
        "name" => "User Manual",
        "image" => "user-manual.drawio.png",
        "link" => "user-manual",
    ],
    [
        "name" => "Template Engine",
        "keywords" => "Template Processor",
        "image" => "template-engine.drawio.png",
        "link" => "template-engine",
    ],
    [
        "name" => "Decision Tree Learning",
        "image" => "decision-tree-learning.drawio.png",
        "link" => "decision-tree-learning",
    ],
    [
        "name" => "Object Aggregate",
        "image" => "object-aggregate.drawio.png",
        "link" => "object-aggregate",
    ],
    [
        "name" => "Data Transfer Object",
        "image" => "data-transfer-object.drawio.png",
        "link" => "data-transfer-object",
    ],
    [
        "name" => "Version Control",
        "keywords" => "Revision Control, Source Control",
        "image" => "version-control.drawio.png",
        "link" => "version-control",
    ],
    [
        "name" => "Software Versioning",
        "image" => "software-versioning.drawio.png",
        "link" => "software-versioning",
    ],
    [
        "name" => "Coding Conventions",
        "keywords" => "Linting",
        "image" => "coding-conventions.drawio.png",
        "link" => "coding-conventions",
    ],
    [
        "name" => "Ubiquitous Language",
        "image" => "ubiquitous-language.drawio.png",
        "link" => "ubiquitous-language",
    ],
    [
        "name" => "Algorithm",
        "image" => "algorithm.drawio.png",
        "link" => "algorithm",
    ],
    [
        "name" => "Heuristic",
        "image" => "heuristic.drawio.png",
        "link" => "heuristic",
    ],
    [
        "name" => "Color",
        "image" => "color.drawio.png",
        "link" => "color",
    ],
    [
        "name" => "Navigation Graph",
        "keywords" => "UI Flow, User Flow, UI Storyboard, Navigation Flow",
        "image" => "navigation-graph.drawio.png",
        "link" => "navigation-graph",
    ],
    [
        "name" => "Stable Dependencies Principle",
        "image" => "stable-dependencies-principle.drawio.png",
        "link" => "stable-dependencies-principle",
    ],
    [
        "name" => "Reuse/Release Equivalence Principle",
        "image" => "reuse-release-equivalence-principle.drawio.png",
        "link" => "reuse-release-equivalence-principle",
    ],
    [
        "name" => "Common Closure Principle",
        "image" => "common-closure-principle.drawio.png",
        "link" => "common-closure-principle",
    ],
    [
        "name" => "Common Reuse Principle",
        "image" => "common-reuse-principle.drawio.png",
        "link" => "common-reuse-principle",
    ],
    [
        "name" => "Typeface",
        "keywords" => "Font",
        "image" => "typeface.drawio.png",
        "link" => "typeface",
    ],
    [
        "name" => "Icon Set",
        "image" => "icon-set.drawio.png",
        "link" => "icon-set",
    ],
    [
        "name" => "Page layout",
        "image" => "page-layout.drawio.png",
        "link" => "page-layout",
    ],

    [
        "name" => "Clarity",
        "image" => "clarity.drawio.png",
        "link" => "clarity",
    ],
    [
        "name" => "User control",
        "image" => "user-control.drawio.png",
        "link" => "user-control",
    ],
    [
        "name" => "Explainability",
        "keywords" => "Algorithmic transparency",
        "image" => "explainability.drawio.png",
        "link" => "explainability",
    ],
    [
        "name" => "Snapshot Sequence",
        "image" => "snapshot.drawio.png",
        "link" => "snapshot-sequence",
    ],
    [
        "name" => "Coordinated Universal Time",
        "keywords" => "UTC",
        "image" => "utc.drawio.png",
        "link" => "utc",
    ],
    [
        "name" => "UNICODE",
        "keywords" => "UTF-8",
        "image" => "unicode.drawio.png",
        "link" => "unicode",
    ],
    [
        "name" => "Standardized Date Format",
        "keywords" => "ISO 8601",
        "image" => "iso-8601.drawio.png",
        "link" => "iso-8601",
    ],
    [
        "name" => "Command Line Interface",
        "keywords" => "CLI",
        "image" => "cli.drawio.png",
        "link" => "cli",
    ],
    [
        "name" => "Graphics Pipeline",
        "image" => "graphics-pipeline.drawio.png",
        "link" => "graphics-pipeline",
    ],
    [
        "name" => "Double Buffering",
        "keywords" => "VSYNC",
        "image" => "double-buffering.drawio.png",
        "link" => "double-buffering",
    ],
    [
        "name" => "Data Synchronization",
        "keywords" => "Sync",
        "image" => "data-synchronization.drawio.png",
        "link" => "data-synchronization"
    ],
    [
        "name" => "Query Object",
        "image" => "query-object.drawio.png",
        "link" => "query-object"
    ],
    [
        "name" => "Optimistic Locking",
        "image" => "optimistic-locking.drawio.png",
        "link" => "optimistic-locking"
    ],
    [
        "name" => "Pessimistic Locking",
        "image" => "pessimistic-locking.drawio.png",
        "link" => "pessimistic-locking"
    ],
    [
        "name" => "Transaction",
        "keywords" => "Unit of work",
        "image" => "transaction.drawio.png",
        "link" => "transaction"
    ],
    [
        "name" => "Undo",
        "image" => "undo.drawio.png",
        "link" => "undo"
    ],
    [
        "name" => "Software license",
        "image" => "license.drawio.png",
        "link" => "license"
    ],
    [
        "name" => "Generative AI",
        "keywords" => "LLM",
        "image" => "gen-ai.drawio.png",
        "link" => "gen-ai"
    ],
    [
        "name" => "ORM",
        "keywords" => "Object-Relational Mapping",
        "image" => "orm.drawio.png",
        "link" => "orm"
    ],
    [
        "name" => "Containerization",
        "keywords" => "Docker, Kubernetes",
        "image" => "containerization.drawio.png",
        "link" => "containerization"
    ],
    [
        "name" => "Type system features",
        "image" => "type-system-features.drawio.png",
        "link" => "type-system-features"
    ],
    [
        "name" => "Syntax features",
        "image" => "syntax-features.drawio.png",
        "link" => "syntax-features"
    ],
    [
        "name" => "Data & Memory features",
        "image" => "data-memory-features.drawio.png",
        "link" => "data-memory-features"
    ],
    [
        "name" => "Function features",
        "image" => "function-features.drawio.png",
        "link" => "function-features"
    ],
    [
        "name" => "Object Oriented Programming features",
        "image" => "object-oriented-programming-features.drawio.png",
        "link" => "object-oriented-programming-features"
    ],
    [
        "name" => "Functional programming features",
        "image" => "functional-programming-features.drawio.png",
        "link" => "functional-programming-features"
    ],
    [
        "name" => "Reactive programming features",
        "image" => "reactive-programming-features.drawio.png",
        "link" => "reactive-programming-features"
    ],
    [
        "name" => "Error handling features",
        "image" => "error-handling-features.drawio.png",
        "link" => "error-handling-features"
    ],
    [
        "name" => "Concurrency features",
        "keywords" => "Parallellism",
        "image" => "concurrency-features.drawio.png",
        "link" => "concurrency-features"
    ],
    [
        "name" => "Miscellaneous features",
        "image" => "miscellaneous-features.drawio.png",
        "link" => "miscellaneous-features"
    ],
    [
        "name" => "Bayesian Inference",
        "image" => "bayesian-inference.svg",
        "link" => "bayesian-inference",
    ],
    [
        "name" => "Markov Chain",
        "image" => "markov-chain.svg",
        "link" => "markov-chain",
    ],
    [
        "name" => "Hidden Markov Model",
        "image" => "hidden-markov-model.svg",
        "link" => "hidden-markov-model",
    ],
    [
        "name" => "Markov Decision Process",
        "image" => "markov-decision-process.svg",
        "link" => "markov-decision-process",
    ],
    [
        "name" => "Monte Carlo Method",
        "image" => "monte-carlo-method.svg",
        "link" => "monte-carlo-method",
    ],
    [
        "name" => "Markov Chain Monte Carlo",
        "image" => "markov-chain-monte-carlo.svg",
        "link" => "markov-chain-monte-carlo",
    ],
    [
        "name" => "Gaussian Process",
        "image" => "gaussian-process.svg",
        "link" => "gaussian-process",
    ],
    [
        "name" => "Kalman Filter",
        "image" => "kalman-filter.svg",
        "link" => "kalman-filter",
    ],
    [
        "name" => "Maximum Likelihood Estimation",
        "image" => "maximum-likelihood-estimation.svg",
        "link" => "maximum-likelihood-estimation",
    ],
    [
        "name" => "Regression Analysis",
        "image" => "regression-analysis.svg",
        "link" => "regression-analysis",
    ],
    [
        "name" => "Gradient Descent",
        "image" => "gradient-descent.drawio.png",
        "link" => "gradient-descent",
    ],
    [
        "name" => "Simulated Annealing",
        "image" => "simulated-annealing.drawio.png",
        "link" => "simulated-annealing",
    ],
    [
        "name" => "A* Search Algorithm",
        "image" => "a-star-search.drawio.png",
        "link" => "a-star-search",
    ],
    [
        "name" => "Hill Climbing",
        "image" => "hill-climbing.drawio.png",
        "link" => "hill-climbing",
    ],
    [
        "name" => "Tabu Search",
        "image" => "tabu-search.drawio.png",
        "link" => "tabu-search",
    ],
    [
        "name" => "Dynamic Programming",
        "image" => "dynamic-programming.drawio.png",
        "link" => "dynamic-programming",
    ],
    [
        "name" => "Linear Programming",
        "image" => "linear-programming.drawio.png",
        "link" => "linear-programming",
    ],
    [
        "name" => "Genetic Algorithm",
        "image" => "genetic-algorithm.drawio.png",
        "link" => "genetic-algorithm",
    ],
    [
        "name" => "Genetic Programming",
        "image" => "genetic-programming.drawio.png",
        "link" => "genetic-programming",
    ],
    [
        "name" => "Particle Swarm Optimization",
        "image" => "particle-swarm-optimization.drawio.png",
        "link" => "particle-swarm-optimization",
    ],
    [
        "name" => "Ant Colony Optimization",
        "image" => "ant-colony-optimization.drawio.png",
        "link" => "ant-colony-optimization",
    ],
    [
        "name" => "Evolution Strategy",
        "image" => "evolution-strategy.drawio.png",
        "link" => "evolution-strategy",
    ],
    [
        "name" => "Artificial Neural Network",
        "image" => "artificial-neural-network.drawio.png",
        "link" => "artificial-neural-network",
    ],
    [
        "name" => "Decision Tree Learning",
        "image" => "decision-tree-learning.drawio.png",
        "link" => "decision-tree-learning",
    ],
    [
        "name" => "Random Forest",
        "image" => "random-forest.drawio.png",
        "link" => "random-forest",
    ],
    [
        "name" => "Gradient Boosting",
        "image" => "gradient-boosting.drawio.png",
        "link" => "gradient-boosting",
    ],
    [
        "name" => "Support Vector Machine",
        "image" => "support-vector-machine.drawio.png",
        "link" => "support-vector-machine",
    ],
    [
        "name" => "k-Nearest Neighbors",
        "image" => "k-nearest-neighbors.drawio.png",
        "link" => "k-nearest-neighbors",
    ],
    [
        "name" => "Naive Bayes Classifier",
        "image" => "naive-bayes-classifier.drawio.png",
        "link" => "naive-bayes-classifier",
    ],
    [
        "name" => "Linear Discriminant Analysis",
        "image" => "linear-discriminant-analysis.drawio.png",
        "link" => "linear-discriminant-analysis",
    ],
    [
        "name" => "Convolutional Neural Network",
        "image" => "convolutional-neural-network.drawio.png",
        "link" => "convolutional-neural-network",
    ],
    [
        "name" => "Recurrent Neural Network",
        "image" => "recurrent-neural-network.drawio.png",
        "link" => "recurrent-neural-network",
    ],
    [
        "name" => "Long Short-Term Memory",
        "image" => "long-short-term-memory.drawio.png",
        "link" => "long-short-term-memory",
    ],
    [
        "name" => "Transformer",
        "image" => "transformer.drawio.png",
        "link" => "transformer",
    ],
    [
        "name" => "Generative Adversarial Network",
        "image" => "generative-adversarial-network.drawio.png",
        "link" => "generative-adversarial-network",
    ],
    [
        "name" => "Diffusion Model",
        "image" => "diffusion-model.drawio.png",
        "link" => "diffusion-model",
    ],
    [
        "name" => "Autoencoder",
        "image" => "autoencoder.drawio.png",
        "link" => "autoencoder",
    ],
    [
        "name" => "k-Means Clustering",
        "image" => "k-means-clustering.drawio.png",
        "link" => "k-means-clustering",
    ],
    [
        "name" => "Hierarchical Clustering",
        "image" => "hierarchical-clustering.drawio.png",
        "link" => "hierarchical-clustering",
    ],
    [
        "name" => "DBSCAN",
        "image" => "dbscan.drawio.png",
        "link" => "dbscan",
    ],
    [
        "name" => "Principal Component Analysis",
        "image" => "principal-component-analysis.drawio.png",
        "link" => "principal-component-analysis",
    ],
    [
        "name" => "t-SNE",
        "image" => "t-sne.drawio.png",
        "link" => "t-sne",
    ],
    [
        "name" => "Self-Organizing Map",
        "image" => "self-organizing-map.drawio.png",
        "link" => "self-organizing-map",
    ],
    [
        "name" => "Association Rule Learning",
        "image" => "association-rule-learning.drawio.png",
        "link" => "association-rule-learning",
    ],
    [
        "name" => "Q-Learning",
        "image" => "q-learning.drawio.png",
        "link" => "q-learning",
    ],
    [
        "name" => "Temporal Difference Learning",
        "image" => "temporal-difference-learning.drawio.png",
        "link" => "temporal-difference-learning",
    ],
    [
        "name" => "Policy Gradient Method",
        "image" => "policy-gradient-method.drawio.png",
        "link" => "policy-gradient-method",
    ],
    [
        "name" => "Multi-Armed Bandit",
        "image" => "multi-armed-bandit.drawio.png",
        "link" => "multi-armed-bandit",
    ],
    [
        "name" => "Expert System",
        "image" => "expert-system.drawio.png",
        "link" => "expert-system",
    ],
    [
        "name" => "Constraint Satisfaction Problem",
        "image" => "constraint-satisfaction-problem.drawio.png",
        "link" => "constraint-satisfaction-problem",
    ],
    [
        "name" => "Fuzzy Logic",
        "image" => "fuzzy-logic.drawio.png",
        "link" => "fuzzy-logic",
    ],
    [
        "name" => "Automated Theorem Proving",
        "image" => "automated-theorem-proving.drawio.png",
        "link" => "automated-theorem-proving",
    ],
    [
        "name" => "Case-Based Reasoning",
        "image" => "case-based-reasoning.drawio.png",
        "link" => "case-based-reasoning",
    ],
    [
        "name" => "Semantic Network",
        "image" => "semantic-network.drawio.png",
        "link" => "semantic-network",
    ],
    [
        "name" => "Bayesian Network",
        "image" => "bayesian-network.drawio.png",
        "link" => "bayesian-network",
    ],
    [
        "name" => "Markov Random Field",
        "image" => "markov-random-field.drawio.png",
        "link" => "markov-random-field",
    ],
    [
        "name" => "Conditional Random Field",
        "image" => "conditional-random-field.drawio.png",
        "link" => "conditional-random-field",
    ],
    [
        "name" => "Graph Neural Network",
        "image" => "graph-neural-network.drawio.png",
        "link" => "graph-neural-network",
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
