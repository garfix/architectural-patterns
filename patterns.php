<?php
include 'template/header.php';
?>

<section>
    <header class="major">
        <h2>Pattern overview</h2>
    </header>
    <div class="posts">
        <?php
            $patterns = [
                [
                    name => "Model-View-Controller",
                    image => "mvc_2.jpg",
                    link => "model-view-controller"
                ],
                [
                    name => "Presentation-Abstraction-Control",
                    image => "pac_1.jpg",
                    link => "presentation-abstraction-control"
                ],
                [
                    name => "Pipe and Filter",
                    image => "pipe_and_filter_2.jpg",
                    link => "pipe-and-filter"
                ],
                [
                    name => "Layered",
                    image => "layers_1.jpg",
                    link => "layered"
                ],
                [
                    name => "Microkernel",
                    image => "microkernel.jpg",
                    link => "microkernel"
                ],
                [
                    name => "N-Tier",
                    image => "tiers_1.jpg",
                    link => "tiers"
                ],
                [
                    name => "Repository",
                    image => "repository.jpg",
                    link => "repository"
                ],
                [
                    name => "Blackboard",
                    image => "blackboard_1.jpg",
                    link => "blackboard"
                ],
                [
                    name => "Finite State Machine",
                    image => "fsm_1.jpg",
                    link => "finite-state-machine"
                ],
                [
                    name => "Process Control",
                    image => "process_control_1.jpg",
                    link => "process-control"
                ],
                [
                    name => "Multi-Agent System",
                    image => "mas_1.jpg",
                    link => "multi-agent-system"
                ],
                [
                    name => "Broker",
                    image => "broker.jpg",
                    link => "broker"
                ],
                [
                    name => "Master-Slave",
                    image => "masterslave.jpg",
                    link => "master-slave"
                ],
                [
                    name => "Interpreter",
                    image => "vm.jpg",
                    link => "interpreter"
                ],
                [
                    name => "Hub and Spoke",
                    image => "hub_and_spoke.jpg",
                    link => "hub-and-spoke"
                ],
                [
                    name => "Event bus",
                    image => "eventbus.jpg",
                    link => "event-bus"
                ],
                [
                    name => "Structural model",
                    image => "structural_model_1.jpg",
                    link => "structural-model"
                ],
                [
                    name => "Ports and Adapters",
                    image => "ports-and-adapters.png",
                    link => "ports-and-adapters"
                ],
                [
                    name => "Peer to Peer",
                    image => "peer-to-peer.png",
                    link => "peer-to-peer"
                ],
                [
                    name => "Event Sourcing",
                    image => "event-sourcing-1.png",
                    link => "event-sourcing"
                ],
                [
                    name => "Command-Query Responsibility Segregation",
                    image => "cqrs-1.png",
                    link => "cqrs"
                ]                
            ];

            usort($patterns, function ($a, $b) { 
                return ($a['name'] < $b['name']) ? -1 : 1;
            });
        ?>
        <?php foreach ($patterns as $p): ?>
            <article>
                <a href="<?= $p['link'] ?>" class="image"><img src="images/<?= $p['image']?>" alt=""></a>
                <h3><?= $p['name']?></h3>
                <ul class="actions">
                    <li><a href="<?= $p['link']?>" class="button">Show</a></li>
                </ul>
            </article>
        <?php endforeach ?>
    </div>
</section>


<?php
include 'template/footer.php';
