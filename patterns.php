<?php
include 'template/header.php';
?>

<section>
    <header class="major">
        <h2>All patterns</h2>
    </header>
    <div class="posts">
        <?php
            $patterns = [
                [
                    name => "Model-View-Controller",
                    image => "mvc_2.jpg",
                    link => "mvc.php"
                ],
                [
                    name => "Presentation-Abstraction-Control",
                    image => "pac_1.jpg",
                    link => "pac.php"
                ],
                [
                    name => "Pipe and Filter",
                    image => "pipe_and_filter_2.jpg",
                    link => "pipe-and-filter.php"
                ],
                [
                    name => "Layered",
                    image => "layers_1.jpg",
                    link => "layers.php"
                ],
                [
                    name => "Microkernel",
                    image => "microkernel.jpg",
                    link => "microkernel.php"
                ],
                [
                    name => "N-Tier",
                    image => "tiers_1.jpg",
                    link => "tiers.php"
                ],
                [
                    name => "Repository",
                    image => "repository.jpg",
                    link => "repository.php"
                ],
                [
                    name => "Blackboard",
                    image => "blackboard_1.jpg",
                    link => "blackboard.php"
                ],
                [
                    name => "Finite State Machine",
                    image => "fsm_1.jpg",
                    link => "fsm.php"
                ],
                [
                    name => "Process Control",
                    image => "process_control_1.jpg",
                    link => "process-control.php"
                ],
                [
                    name => "Multi-Agent System",
                    image => "mas_1.jpg",
                    link => "mas.php"
                ],
                [
                    name => "Broker",
                    image => "broker.jpg",
                    link => "broker.php"
                ],
                [
                    name => "Master-Slave",
                    image => "masterslave.jpg",
                    link => "master-slave.php"
                ],
                [
                    name => "Interpreter",
                    image => "vm.jpg",
                    link => "vm.php"
                ],
                [
                    name => "Hub and Spoke",
                    image => "hub_and_spoke.jpg",
                    link => "hub-and-spoke.php"
                ],
                [
                    name => "Event bus",
                    image => "eventbus.jpg",
                    link => "event-bus.php"
                ],
                [
                    name => "Structural model",
                    image => "structural_model_1.jpg",
                    link => "structural-model.php"
                ],
                [
                    name => "Ports and Adapters",
                    image => "ports-and-adapters.png",
                    link => "ports-and-adapters.php"
                ],
                [
                    name => "Peer to Peer",
                    image => "peer-to-peer.png",
                    link => "peer-to-peer.php"
                ],
                [
                    name => "Event Sourcing",
                    image => "event-sourcing-1.png",
                    link => "event-sourcing.php"
                ],
                [
                    name => "Command-Query Responsibility Separation",
                    image => "cqrs-1.png",
                    link => "cqrs.php"
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
