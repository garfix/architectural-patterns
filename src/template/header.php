<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
	<head>
		<title><?= $title ? $title : $pattern['name'] ?> | Architectural Patterns</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />
        <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
        <meta name="updated_at" content="2023-11-28 13:00 PM" />
	</head>
	<body class="is-preload">

        <?php if (strpos($_SERVER['HTTP_HOST'], 'localhost') === false): ?>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-4E7P326XB4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-4E7P326XB4');
        </script>

        <?php endif ?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="." class="logo"><strong>Architectural Patterns</strong> &#8212; inspiration for your application</a>
									<ul class="icons">
										<li><a href="https://github.com/garfix/architectural-patterns" target="_blank" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>
								</header>
