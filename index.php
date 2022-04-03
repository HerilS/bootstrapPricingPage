<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Document</title>
	<link rel="stylesheet" href="./styles/css/main.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<?php require_once('components/navbar.php') ?>
	<!-- Hero -->
	<section class="bg-primary py-10 text-white position-relative">
		<div class="container px-md-10">
			<div class="text-center col-sm-9 col-lg-7 col-xl-6 mx-auto mb-6">
				<h1>Simple Pricing</h1>
				<p>Try Sigma free for 30 days with full features. No credit card required. No commitment required. Then upgrade your account after that when your ready</p>
				<button class="btn btn-secondary bg-white text-black px-4 py-3">Start your trial</button>
			</div>
		</div>
	</section>
	<!-- /Hero -->

	<!-- Pricing Table -->
	<div class="container pricing-table-container position-relative">
		<div class="row border rounded shadow-lg g-0 mt-n10 bg-white">
			<div class="col-4 d-none d-lg-block border-end">
				<div class="pricing-heading">
					<h3 class="mb-4">Try one of our flexible plans</h1>
						<div>
							<div><i class="fa-solid fa-circle-check text-success"></i> No credit card required <br /></div>
							<div class="my-2"><i class="fa-solid fa-circle-check text-success"></i> Cancel anytime <br /></div>
							<div><i class="fa-solid fa-circle-check text-success"></i> 30 day free trial</div>
						</div>
				</div>
				<div class="pricing-cell">Users</div>
				<div class="pricing-cell">Templates</div>
				<div class="pricing-cell">Emails</div>
				<div class="pricing-cell">Bandwidth</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="pricing-heading">
					<h3 class="mb-4">Essential</h3>
					<p class="text-dark">Keep things simple with our basic plan</p>
					<h2 class="mt-5">$19/mo</h2>
					<p>Billed anually per team member</p>
					<button class="btn btn-primary w-100 py-3">Get Started</button>
				</div>
				<div class="pricing-cell">Users</div>
				<div class="pricing-cell">Templates</div>
				<div class="pricing-cell">Emails</div>
				<div class="pricing-cell">Bandwidth</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 border-start">
				<div class="pricing-heading">
					<h3 class="mb-4">Agency</h3>
					<p class="text-dark">Scale up & improve with our Agency plan</p>
					<h2 class="mt-5">$25/mo</h2>
					<p>Billed anually per team member</p>
					<button class="btn btn-primary w-100 py-3">Get Started</button>
				</div>
				<div class="pricing-cell">Users</div>
				<div class="pricing-cell">Templates</div>
				<div class="pricing-cell">Emails</div>
				<div class="pricing-cell">Bandwidth</div>
			</div>
		</div>
	</div>
	<!-- /Pricing Table -->


	<!-- Enterprise Banner -->
	<div class="container mt-10">

		<div class="card bg-primary p-2 p-sm-5">
			<div class="card-body row text-white">
				<div class="col-12 col-sm-6 col-lg-5">
					<h3 class="mb-3">Need Enterprise?</h3>
					<p class="opacity-75 w-75">Our enterprise package is custom-built per client • ideal for large businesses</p>
					<button class="btn btn-secondary bg-white text-black px-4 py-3">Discuss your requirements</button>
				</div>
				<div class="col-12 col-sm-6 col-lg-7 mt-6 mt-sm-0">
					<div><i class="fa-solid fa-circle-check"></i> Custom package per client <br /></div>
					<div class="my-2"><i class="fa-solid fa-circle-check"></i> Unlimited resources <br /></div>
					<div><i class="fa-solid fa-circle-check"></i> Add additional features</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Enterprise Banner -->

	<!-- Logo Cloud -->
	<div class="container text-center my-10">
		<h6 class="subtitle mb-4">Trusted by thousands of brands</h5>
			<div class="d-flex justify-content-center flex-wrap gap-5">
				<img class="logo" src="https://www.logo.wine/a/logo/Sony_Creative_Software/Sony_Creative_Software-Logo.wine.svg" alt="logo" />
				<img class="logo" src="https://www.logo.wine/a/logo/Amazon_(company)/Amazon_(company)-Logo.wine.svg" alt="logo">
				<img class="logo" src="https://www.logo.wine/a/logo/Optiarc/Optiarc-Logo.wine.svg" alt="logo" />
				<img class="logo" src="https://www.logo.wine/a/logo/Google/Google-Logo.wine.svg" alt="logo" />
				<img class="logo" src="https://www.logo.wine/a/logo/Toshiba/Toshiba-Logo.wine.svg" alt="logo" />
				<img class="logo" src="https://www.logo.wine/a/logo/Facebook/Facebook-Logo.wine.svg" alt="logo" />
			</div>
	</div>
	<!-- /Logo Cloud -->

	<!-- Faqs -->
	<div class="py-5 bg-light">
		<div class="container">
			<h3 class="text-center">Frequently Asked Questions</h1>
				<!-- Accordion -->
				<div class="accordion mx-auto mt-5 col-12 col-m-8 col-lg-6 col-xl-5" id="accordionExample">
					<div class="accordion-item border-bottom">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What products do you offer?
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
					<div class="accordion-item border-bottom">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Why should I trust Sigma?
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Who works at Sigma?
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
				</div>
				<!-- /Accordion -->


		</div>
	</div>
	<!-- /Faqs -->

	<?php require_once("components/footer.php") ?>
</body>

<script type="module" src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
