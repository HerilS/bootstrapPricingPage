<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
	header('HTTP/1.0 403 Forbidden', TRUE, 403);
	die(header('location: /index.php'));
}
?>
<!-- Footer -->
<div class="bg-black py-10">
	<div class="container text-white text-center">
		<h1 class="col-10 col-sm-5 mx-auto">Try Sigma free for 30 days with unlimited features.</h1>
		<button class="btn btn-primary px-4 py-3 mt-4 mb-8">Start free trial</button>
		<div class="d-flex justify-content-between flex-column flex-sm-row">
			<a class="navbar-brand d-flex align-items-center" href="#">
				<span class="f-w-7 d-block text-success me-2">
					<svg class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.46 258.91">
						<path d="M145.61,187.72,22.41,116.58,0,129.52l50.45,29.13L0,187.77l22.41,12.94s90.75,52.38,100.82,58.2l123.23-71.13L44.7,71.2l78.54-45.34,78.4,45.26-28,16.2-50.31-29L100.85,71.2l123.21,71.13,22.4-12.94L196,100.25q25.25-14.55,50.46-29.12L123.23,0,0,71.13,201.77,187.71l-78.52,45.41L44.8,187.78l28.06-16.19,50.34,29.07Z" fill="currentColor" fill-rule="evenodd"></path>
					</svg>
				</span>
				<span class="fw-bold text-white">Sigma</span>
			</a>
			<div class="d-flex gap-4 align-items-center mt-4 mt-sm-0">
				<i class="fa-brands fa-instagram fa-xl"></i>
				<i class="fa-brands fa-twitter fa-xl"></i>
				<i class="fa-brands fa-facebook fa-xl"></i>
				<i class="fa-brands fa-github fa-xl"></i>
				<i class="fa-brands fa-linkedin fa-xl"></i>
			</div>
		</div>

	</div>
	<div class="container mt-8">
		<div class="d-flex justify-content-between row">
			<div class="col-12 col-sm-6 col-md-3">
				<h6 class="subtitle mb-4">Product</h6>
				<ul class="list-unstyled text-white d-flex flex-column gap-2">
					<li>Page Builder</li>
					<li>AI generator</li>
					<li>Landing page templates</li>
					<li>Sketch plugin</li>
					<li>Figma addon</li>
					<li>XD plugin</li>
				</ul>
			</div>
			<div class="col-12 col-sm-6 col-md-3 pt-5 pt-sm-0">
				<h6 class="subtitle mb-4">Company</h6>
				<ul class="list-unstyled text-white d-flex flex-column gap-2">
					<li>Page Builder</li>
					<li>AI generator</li>
					<li>Landing page templates</li>
					<li>Sketch plugin</li>
					<li>Figma addon</li>
					<li>XD plugin</li>
				</ul>
			</div>
			<div class="col-12 col-sm-6 col-md-3 pt-5 pt-sm-3 pt-md-0">
				<h6 class="subtitle mb-4">About Us</h6>
				<ul class="list-unstyled text-white d-flex flex-column gap-2">
					<li>Page Builder</li>
					<li>AI generator</li>
					<li>Landing page templates</li>
					<li>Sketch plugin</li>
					<li>Figma addon</li>
					<li>XD plugin</li>
				</ul>
			</div>
			<div class="col-12 col-sm-6 col-md-3 pt-5 pt-sm-3 pt-md-0">
				<h6 class="subtitle mb-4">Support</h6>
				<ul class="list-unstyled text-white d-flex flex-column gap-2">
					<li>Page Builder</li>
					<li>AI generator</li>
					<li>Landing page templates</li>
					<li>Sketch plugin</li>
					<li>Figma addon</li>
					<li>XD plugin</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /Footer-->
