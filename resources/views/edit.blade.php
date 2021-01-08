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
							<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel venenatis mauris vehicula hendrerit.</p>
							<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
                            <form action="{{ route('postedit') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
									<div class="fields">
										<div class="field">
                                            <label for="name">Gebruikersnaam</label>
											<input type="text" name="name" id="name" placeholder="{{ Auth::user()->name }}" />
										</div>
                                        <div class="field">
                                            <label for="email">Email</label>
											<input type="text" name="email" id="email" placeholder="{{ Auth::user()->email }}" />
										</div>
										<div class="field">
                                            <label for="password">Wachtwoord</label>
											<input type="text" name="password" id="password" placeholder="Nieuw wachtwoord" />
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