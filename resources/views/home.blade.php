<!DOCTYPE HTML>
<html>
	<head>
		<title>Smeme</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body class="is-preload">
			<div id="wrapper">
					<header id="header">
						<div class="inner">
								<a href="{{ route('home') }}" class="logo">
									<span class="titlesmeme">Smeme</span>
								</a>
								<p class="welcometext"><span class="welcome">Welkom</span> <br> {{ Auth::user()->name }}</p>

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
							<li><a href="{{ route('generic') }}">Generic</a></li>
							<li><a href="{{ route('elements') }}">Elements</a></li>
							<li><a href="{{ route('upload') }}">Upload</a></li>
							<li><a href="{{ route('logout') }}"> Logout </a></li>
						</ul>
					</nav>
					<div id="main">
						<div class="inner">
							<header>
								<h1>Upload jouw malse memes nu!</h1>
                                <a href="{{ route('upload') }}" class="button primary">Upload</a>
							</header>
							<hr>
							@foreach ($memes as $meme)

							<article class="stylememe">
									<span class="image">
									    <img class="memeimg" src="{{ asset('storage/' . $meme->meme) }}">
									</span>
									<div class="titledescusertext">
										<h2 class="memetitle">{{ $meme->title }}</h2>
										<div class="content">
											<p class="memedesc">{{ $meme->description }}</p>
										</div>
										<p class="memeuser">Uploaded by : {{ $meme->user_id }}</p>

										<a href="{{ route('generic') }}">
                                        	<p>Zie meer...</p>
										</a>
									</div>
								</article>
							@endforeach
						</div>
					</div>
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contacteer ons!</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
						</div>
					</footer>

			</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>