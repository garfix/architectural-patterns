                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <!-- Menu -->
                        <nav id="menu">
                            <header class="major">
                                <h2>Menu</h2>
                            </header>
                            <ul>
                                <li><a href=".">Home</a></li>
                                <li>
                                    <?php foreach ($pages as $title => $page): ?>
                                        <span class="opener active"><?= $title ?></span>
                                        <ul>
                                            <?php foreach ($page as $subPage): ?>
                                                <li><a href="<?= $subPage ?>"><?= getCategoryByCode($subPage)['name'] ?></a>
                                            <?php endforeach ?>
                                        </ul>
                                    <?php endforeach ?>
                                </li>
                                <li><a href="pattern-tree">Pattern hierarchy</a></li>
                                <li><a href="patterns">Pattern grid</a></li>
                                <li><a href="about">About</a></li>
                            </ul>
                        </nav>

                        <!-- Footer -->
                        <footer id="footer">
                            <p class="copyright">&copy; 2023. All rights reserved. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                        </footer>

                </div>
            </div>
        </div>

		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

	</body>
</html>