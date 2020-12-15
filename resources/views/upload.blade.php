<!DOCTYPE HTML>
<html>
	<head>
		<title>Smeme</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<div id="wrapper">
					<header id="header">
						<div class="inner">
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('generic') }}">Ipsum veroeros</a></li>
							<li><a href="{{ route('generic') }}">Tempus etiam</a></li>
							<li><a href="{{ route('generic') }}">Consequat dolor</a></li>
							<li><a href="{{ route('elements') }}">Elements</a></li>
						</ul>
					</nav>
					<div id="main">
                    <div class="inner">
							<section>
								<h2>Upload jouw smeme</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field">
											<input type="text" name="name" id="name" placeholder="Titel" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Beschrijving"></textarea>
                                        </div>
									</div>
									<ul class="actions">
                                        <li><a href="#" class="button icon solid fa-upload">Upload</a></li>
										<li><input type="submit" value="Inzenden" class="primary" /></li>
									</ul>
								</form>
							</section>
						</div>
					</div>
			</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>