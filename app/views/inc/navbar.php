<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/users/register">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>