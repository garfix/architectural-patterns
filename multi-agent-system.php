<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Multi-agent System</h1>
    </header>
    <p>
        A Multi Agent System consists of a group of highly autonomous entities (agents) that all perform a single function well.
        Together they solve a complex problem or control a complex system.
    </p>
    <p>
        An <b>Agent</b> is a component that autonomously interacts with its environment. It is never <i>told</i> what to do,
        one can merely request it to do something. It acts without being told. It should have a single, clear purpose.
        It's internal structure is not accessible to others.
    </p>

    <h2>Where does it come from?</h2>
    <p>
        The term Multi-Agent Systems was popularized by <a href="http://www.csc.liv.ac.uk/~mjw/">Mike Wooldridge</a> in his 1992 PhD thesis.
        MAS are an exponent of Distributed Artificial Intelligence and Agent techniques.
    </p>

    <h2>When should you use it?</h2>
    <p>
        Use it when your application requires many parts that all need to be active at the same time,
        do not have a single solution space and do not require a centralized control.
    </p>

    <h2>How does it work?</h2>
    <p>
        Agents can be organized in different ways in a MAS:
        <ul>
            <li>Flat (democracy): Any agent can directly contact all other agents. The system is either closed,
            so all agents know the location of all other agents, or open, which requires a agent location mechanism.
            <li>Fixed Hierarchy: The agents only communicate to the the ones directly above or below them.
            No faculty to find other agents is necessary. The upper level agents require the services of
            lower level agents.
            <li>Subsumption: An agent may <i>contain</i> other agents.
            <li>Modular. Agents are grouped together in modules. Within these modules communication is much more
            direct than between agents of different modules.
        </ul>
    </p>
    <p><center><img src="images/mas_1.jpg"></center><br><b><font face="comic sans ms" size="-1">Picture: Flat Organisation</font></b></p>
    <p><center><img src="images/mas_2.jpg"></center><br><b><font face="comic sans ms" size="-1">Picture: Hierarchical Organisation</font></b></p>
    <p><center><img src="images/mas_3.jpg"></center><br><b><font face="comic sans ms" size="-1">Picture: Subsumption Organisation</font></b></p>
    <p><center><img src="images/mas_4.jpg"></center><br><b><font face="comic sans ms" size="-1">Picture: Modular Organisation</font></b></p>
    <p>
        Agents communicate with each other by sending messages. The messages use Speech Act Theory as their basis.
        Special agent-to-agent communication languages exist, formalising the way they should communicate.
        Along with formalised agent ontologies, they form semi-standardized ways of letting all sorts of
        agents communicate. This seems overkill for small size applications, however.
    </p>

    <h2>Problems</h2>
    <p>
        <ul>
            <li>The order of the steps that the system as a whole executes is not clear. Therefore it can be
            hard to trace the way a solution is found. Also, if an agent reacts to data it has received from
            another agent, this data may be out of date.
        </ul>
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="http://www.ri.cmu.edu/pub_files/pub1/shehory_onn_1998_1/shehory_onn_1998_1.pdf">Architectural Properties of Multi-Agent Systems</a>
        <li><a href="http://www.acm.org/crossroads/xrds5-4/multiagent.html">Towards a Standardization of Multi-Agent System Frameworks</a>
        <li><a href="http://citeseer.nj.nec.com/cache/papers/cs/3935/http:zSzzSzwww.cosy.sbg.ac.atzSz~stokkermzSzwooldridge.pdf/wooldridge92logical.pdf">The logical modelling of computational Multi-Agent Systems</a> PhD Thesis of Mike Wooldridge.
    </ul>
</section>

<?php
include 'template/footer.php';
