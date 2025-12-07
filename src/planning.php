<?php
include 'template/data.php';
$pattern = $indexed['Planning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>In a goal space, find a plan (series of actions) from intial state to goal state.</dd>
    </dl>

    <p>
        The goal of planning is a sequence of actions to perform in order to reach a goal. The actions are the leafs of a tree of goals and subgoals. These trees are built by the planning algorithm.
    </p>

    <figure><img alt="" src="images/planning.drawio.png"><figcaption>Search architecture diagram</figcaption></figure>

    <p>
        Goal space is a specialization of <a href="search">search</a> space. The solution is a series of actions that fulfills the goal. Start with the goal. Find all rules that name the subgoals required to reach the goal. For each of these rules, make a copy of the goal and turn it into the root of a tree. The subgoals become the leafs of this tree. The trees are partial plans. Add them to the store of partial plans. Continue to take a partial plan, expand it by finding matching rules. When a plan does not need to be expanded anymore, it is finished and serves as a solution. When no rule can be found, the plan is discarded.
    </p>

    <figure><img alt="" src="images/partial-plan.drawio.png"><figcaption>Partial plan</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Building a tower of blocks
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Actions should be planned before they are executed, because mindlessly trying them out is very ineffective and has unwanted side effects
        <li>Rules are available that split up a goal into subgoals
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>The situation may change after the plan was made; if that's possible the application must be able to replan dynamically
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Search_problem">Wikipedia</a>
    </ol>
</section>

<?php
include 'template/footer.php';
