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
							<h1>Edit Meme</h1>
                            <div class="inner">
                            <h2 class="memetitlefull">{{ $memei->title }}</h2>
                            <span class="image main memeimgfull"><img class="memeimgfull" src="{{ asset('storage/' . $memei->meme) }}"></span>
                            <div class="content">
								<p class="memedescfull">{{ $memei->description }}</p>
							</div>
							@if($errors->any())
									<div class="alert alert-danger alert-danger-edit ">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{$error}}</li>
											@endforeach
										</ul>
									</div>
								@endif
						</div>
							<form action="{{ route('posteditpost') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<input type="hidden" value="{{ request()->route('id') }}" name="id">
									<div class="fields">
										<div class="field">
                                            <label for="title">Meme naam</label>
											<input type="text" name="title" id="title" placeholder="{{ $memei->title }}" value="{{ old('title', $memei->title) }}" />
										</div>
                                        <div class="field">
                                            <label for="description">Meme beschrijving</label>
											<input type="text" name="description" id="description" placeholder="{{ $memei->description }}" value="{{ old('description', $memei->description) }}" />
										</div>
										<div class="field">
                                            <label for="meme">Afbeelding</label>
											<li><a href="#" class="button icon solid fa-upload"><input type="file" name="meme" class="editimage"/></a></li>
										</div>
									</div>
									<ul class="actions">
									@if ($memei->userCanEdit(Auth::user()))
										<li><input type="submit" value="Wijzigen" class="primary" /></li>
									@endif
									</ul>
								</form>
                        </div>
					</div>

				<!-- Footer -->
                @include('includes.footer')

			</div>

		<!-- Scripts -->
			@include('includes.scripts')

	</body>
</html>