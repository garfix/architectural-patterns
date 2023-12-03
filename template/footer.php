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
                                    <span class="opener active">Categories</span>
                                    <ul>
                                    <?php foreach ($pages as $page): ?>
                                        <li><a href="<?= $page ?>"><?= getCategoryByCode($page)['name'] ?></a>
                                    <?php endforeach ?>
                                    </ul>
                                </li>
                                <li><a href="patterns">All patterns</a></li>
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