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
							<h1>Edit Profile</h1>
							@if($errors->any())
									<div class="alert alert-danger alert-danger-edit ">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{$error}}</li>
											@endforeach
										</ul>
									</div>
								@endif
                            <form action="{{ route('postedit') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
									<div class="fields">
										<div class="field">
                                            <label for="name">Gebruikersnaam</label>
											<input type="text" name="name" id="name" placeholder="{{ Auth::user()->name }}" value="{{ old('name', Auth::user()->name) }}"/>
										</div>
                                        <div class="field">
                                            <label for="email">Email</label>
											<input type="text" name="email" id="email" placeholder="{{ Auth::user()->email }}" value="{{ old('email', Auth::user()->email) }}"/>
										</div>
										<div class="field">
                                            <label for="password">Wachtwoord</label>
											<input type="password" name="password" id="password" placeholder="Nieuw wachtwoord" />
										</div>
										<div class="field">
                                            <label for="password_confirmation">Bevestig Wachtwoord</label>
											<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Nieuw wachtwoord" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Wijzigen" class="primary" /></li>
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