<!DOCTYPE HTML>
<html>
	@include('includes.head')
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
					@include('includes.menu')
					<div id="main">
                    <div class="inner">
							<section>
								<h2>Upload jouw smeme</h2>

								@if($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{$error}}</li>
											@endforeach
										</ul>
									</div>
								@endif

								<form action="{{ route('postmeme') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
									<div class="fields">
										<div class="field">
											<input type="text" name="title" id="title" placeholder="Titel" />
										</div>
										<div class="field">
											<textarea name="description" id="description" placeholder="Beschrijving"></textarea>
										</div>
										<div class="field">
										<input type="checkbox" id="general" name="general" value="general">
										<label for="general">Agree to Terms and Conditions</label>
										<input type="checkbox" id="privacy" name="privacy" value="privacy">
										<label for="privacy">Agree to privacy policy</label>
										<input type="hidden" value="{{ Auth::id() }}" name="user_id">
										</div>
									</div>
									<ul class="actions">
                                        <li><a href="#" class="button icon solid fa-upload"><input type="file" name="meme"/></a></li>
										<li><input type="submit" value="Inzenden" class="primary" /></li>
									</ul>
								</form>
							</section>
						</div>
					</div>
			</div>
			@include('includes.scripts')

	</body>
</html>