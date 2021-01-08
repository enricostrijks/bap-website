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
                        {{-- !-- Delete Warning Modal -->  --}}
                            <form action="{{ route('destroypost', $memei->id) }}" method="get">
                                <div class="modal-body">
                                    @csrf
                                    <h5 class="text-center">Hiermee verwijder je de meme : {{ $memei->title }}! Ben je hier zeker van?</h5>
                                    <img class="memeimg" src="{{ asset('storage/' . $memei->meme) }}">
                                </div>
                                <div class="modal-footer-delete">
                                    <a href=" {{ route('home') }} "><button type="button" class="btn btn-secondary">Annuleer</button><a>
                                    <button type="submit" class="btn btn-danger">Ja, verwijder mijn meme</button>
                                </div>
                            </form>
                        </div>
					</div>

			</div>

		<!-- Scripts -->
			@include('includes.scripts')

	</body>
</html>