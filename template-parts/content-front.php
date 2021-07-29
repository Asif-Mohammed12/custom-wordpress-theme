<article class="content px-3 py-5 p-md-5">
	<div class="wrapper">
		<article class="content">
			<div class='container'>
				<p class="mt-3 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				<div class="row row-cols-1 mt-4 row-cols-md-2">
					<div class="col mb-4">
						<div class="card card1">
							<div class="card-body">
								<h5 class="card-title static-card-heading">Card title</h5>
								<p class="card-text static-card-heading">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card card2">
							<div class="card-body">
								<h5 class="card-title static-card-heading">Card title</h5>
								<p class="card-text static-card-heading">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</article>
<div class="full-section">
	<h1 class="our-section-title">My new Wordpress theme</h1>
	<div class="our-story">
		<div class="our-story-content">
			<h1 class="our-story heading-story">Architect & Engineer</h1>
			<p class="our-story-heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<div class="area">Check Now </div>
		</div>
	</div>
</div>
<article class="content px-3 py-5 p-md-5">
	<div class="wrapper">
		<article class="content">
			<h1 class="our-team-headeing">our team</h1>
			<div class="row row-cols-1 row-cols-md-3 our-team-card">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front"> <img src="wp-content/uploads/2021/07/Faceless-Male-Avatar-In-Suit.png" alt="Avatar" style="width:300px;height:300px;"> </div>
						<div class="flip-card-back">
							<h1 class="flip-card-front-inner">John Doe</h1>
							<p>Architect & Engineer</p>
							<p>We love that guy</p>
						</div>
					</div>
				</div>
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front"> <img src="wp-content/uploads/2021/07/images.jpg" alt="Avatar" style="width:300px;height:300px;"> </div>
						<div class="flip-card-back">
							<h1 class="flip-card-front-inner">Bill george</h1>
							<p>Architect & Engineer</p>
							<p>We love that guy</p>
						</div>
					</div>
				</div>
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front"> <img src="wp-content/uploads/2021/07/screenshot.png" alt="Avatar" style="width:300px;height:300px;"> </div>
						<div class="flip-card-back">
							<h1 class="flip-card-front-inner">mike hook</h1>
							<p>Architect & Engineer</p>
							<p>We love that guy</p>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</article>
<div class="service-section">
	<section class="forms-section">
		<h1 class="section-title">Animated Forms</h1>
		<div class="row row-cols-1 row-cols-md-3">
			<div class="forms">
				<div class="form-wrapper is-active">
					<button type="button" class="switcher switcher-login"> Login <span class="underline"></span> </button>
					<form class="form form-login">
						<fieldset>
							<legend>Please, enter your email and password for login.</legend>
							<div class="input-block">
								<label for="login-email">E-mail</label>
								<input id="login-email" type="email" required> </div>
							<div class="input-block">
								<label for="login-password">Password</label>
								<input id="login-password" type="password" required> </div>
						</fieldset>
						<button type="submit" class="btn-login">Login</button>
					</form>
				</div>
				<div class="form-wrapper">
					<button type="button" class="switcher switcher-signup"> Sign Up <span class="underline"></span> </button>
					<form class="form form-signup">
						<fieldset>
							<legend>Please, enter your email, password and password confirmation for sign up.</legend>
							<div class="input-block">
								<label for="signup-email">E-mail</label>
								<input id="signup-email" type="email" required> </div>
							<div class="input-block">
								<label for="signup-password">Password</label>
								<input id="signup-password" type="password" required> </div>
							<div class="input-block">
								<label for="signup-password-confirm">Confirm password</label>
								<input id="signup-password-confirm" type="password" required> </div>
						</fieldset>
						<button type="submit" class="btn-signup">Continue</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
<article class="content px-3 py-5 p-md-5">
	<?php
	
	the_content();
	?>

</article>

<script>
const switchers = [...document.querySelectorAll('.switcher')]
switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})
</script>