<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Peer to Peer</h1>
    </header>
    <p>
        Peer-to-peer (or P2P) networks, are used to share a large set of resources where each node (peer) contains only a subset of the resources. All nodes are responsible for both the upload and download of the resources.
    </p>
    <p>
        Multiple nodes will contain the same resources and when one node requests a resource, it may be downloaded (seeded) from multiple nodes at the same time.
    </p>

    <h2>How does it work?</h2>
    <p>
        There are two aspects to be considered. The first is: how do the nodes know that the others exist?<br>
        A new node is added when a person adds the address of this node to the address table of some other node already in the network.<br>
        The nodes themselves forward the addresses to the nodes with which they are directly linked.
    </p>
    <p>
        The other aspect is resource discovery: how does one node know where to find a resource?<br>
        The simple solution is to send a request to all peers and wait for the response.<br>
        The advanced solution is the use of some sort of a data structure that tells each node where to find a resource.
    </p>

    <figure><img src="images/peer-to-peer.png"><figcaption>Peer to Peer architecture diagram</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>USENET
        <li>Filesharing services like Napster, Kazaa, and many others
    </ul>

    <h2>Where does it come from?</h2>
    <p>
        Though the concept was much older, the architecture became popular with the advent of Napster (in 1999), the filesharing service that got into trouble because it was used for sharing illegal music and video copies.
    </p>

    <h2>When should you use it?</h2>
    <p>
        <li>Use it when there is a large set of resources to be maintained and shared by a large group of people.
        <li>Use it for its lack of a single-point-of-failure. Any node may fail temporarily or permanently and the system will not suffer.
    </p>

    <h2>Problems</h2>
    <p>
        <li>When the system is open, there is a chance that it will be misused.
        <li>Resource detection in a network with much churn (many nodes leaving and joining) is a hard problem.
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Consistent_hashing">Consistent hashing</a> for resource detection.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Peer-to-peer">Wikipedia on peer-to-peer</a>
    </ul>
</section>

<?php
include 'template/footer.php';
