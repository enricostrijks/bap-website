<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	@include('includes.head')
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="{{ route('home') }}" class="logo">
                                    <span class="titlesmeme">Smeme</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					@include('includes.menu')

				<!-- Main -->
					<div id="main">
						<div class="inner">
                            <h2 class="memetitlefull">{{ $memei->title }}</h2>
                            <span class="image main memeimgfull"><img class="memeimgfull" src="{{ asset('storage/' . $memei->meme) }}"></span>
                            <div class="content">
								<p class="memedescfull">{{ $memei->description }}</p>
							</div>
							<p class="memeuserfull">Uploaded by : {{ $memei->user->name }}</p>
                        </div>
					</div>

				<!-- Footer -->
                @include('includes.footer')

			</div>

		<!-- Scripts -->
        @include('includes.scripts')

	</body>
</html>