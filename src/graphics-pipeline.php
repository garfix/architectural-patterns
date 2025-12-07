<?php
include 'template/data.php';
$pattern = $indexed['Graphics Pipeline'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>3D scenes are rendered by specialized graphics card hardware routines</dd>
    </dl>

    <figure><img alt="" src="images/graphics-pipeline.drawio.png"><figcaption>Graphics Pipeline</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        As an application programmer the details of the graphics card are abstracted away by a graphics API. The best known of these are DirectX and OpenGL. Use these to write software that's independent of the actual card the scene is displayed on.
    </p>
    <p>
        3D animations would require an incredible amount of CPU processing power, in stead they are performed by a specialized piece of hardware called the GPU (graphics programming unit). The GPU has its own memory, called VRAM.
    </p>
    <p>
        Some resources don't change and need to be uploaded to the GPU once, at the beginning of the game:
        <ul>
            <li>Vertex buffers
            <li>Index buffers
            <li>Textures
            <li>Shader programs
            <li>Render targets
            <li>Constant buffers
            <li>Structured buffers
        </ul>
    </p>
    <p>
        For every following frame, the game calculates the new game state, including the positions of the vertices. This is all done by the CPU:
        <ul>
            <li>Collision Detection
            <li>Animation and Physics
            <li>Game Logic
        </ul>
    </p>
    <p>
        Once the new geometry is uploaded to the GPU, the GPU pipeline performs the following steps:
        <ul>
            <li>Vertex Generation
            <li>Vertex Processing
            <li>Primitive Generation
            <li>Primitive Processing
            <li>Fragment Generation / Rasterization
            <li>Fragment Processing
            <li>Pixel Operations
        </ul>
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>You will need the graphics pipeline when doing 3D graphics.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://benkenobi007.github.io/Graphics-Pipeline-Overview/">Graphics Pipeline overview<a>
        <li><a href="https://en.wikipedia.org/wiki/Graphics_pipeline">Wikipedia on Graphics Pipeline<a>
        <li><a href="https://en.wikipedia.org/wiki/Framebuffer">Wikipedia on Framebuffer<a>
        <li><a href="https://en.wikipedia.org/wiki/Memory-mapped_I/O_and_port-mapped_I/O">Wikipedia on Memory-mapped I/O and port-mapped I/O<a>

    </ul>
</section>

<?php
include 'template/footer.php';
