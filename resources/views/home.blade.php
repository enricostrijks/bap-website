<!DOCTYPE HTML>
<html>
	@include('includes.head')
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
					@include('includes.menu')
					<div id="main">
						<div class="inner">
							<header>
								<h1>Upload jouw malse memes nu!</h1>
                                <a href="{{ route('upload') }}" class="button primary">Upload</a>
							</header>
							<hr>
							@foreach ($memes as $meme)

							<article class="stylememe">
									<span class="imagehome">
									    <img class="memeimg" src="{{ asset('storage/' . $meme->meme) }}">
									</span>
									<div class="titledescusertext">
										<h2 class="memetitle">{{ $meme->title }}</h2>
										<div class="content">
											<p class="memedesc">{{ $meme->description }}</p>
										</div>
										<p class="memeuser">Uploaded by : {{ $meme->user->name }}</p>

										<div class="memelinks">
										@if ($meme->userCanEdit(Auth::user()))
											<a href="{{ url('editpost/' .$meme->id) }}">
											<p>Bewerken</p>
											</a>
											<a href="{{ url('delpost/' .$meme->id) }}">
											<p>Verwijderen</p>
											</a>
										@endif
											<a href="{{ url('memes/' .$meme->id) }}">
												<p>Zie meer...</p>
											</a>
										</div>
									</div>
								</article>
							@endforeach
							{{ $memes->links('pagination::bootstrap-4') }}
						</div>
					</div>
					@include('includes.footer')

			</div>
			@include('includes.scripts')

	</body>
</html>