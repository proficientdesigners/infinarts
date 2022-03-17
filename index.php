<?php

if (isset($_POST) && isset($_POST['sdafiuoy']) && empty($_POST['sdafiuoy'])) {
    $fields = $_POST;
    $message = "<h4>Landing page Contact form</h4>";
    foreach ($fields as $key => $value) {
        if ($key !== 'sdafiuoy') {
            $message .= "<p>" . ucwords($key) . " : " . $value . "</p>";
        }
    }

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
//    $headers .= 'Cc: myboss@example.com' . "\r\n";

    if (mail("proficientdesigners@gmail.com", "Landing page Contact form", $message, $headers)) {
        header("Location: thank-you.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport"/>
	<meta content="ie=edge" http-equiv="X-UA-Compatible"/>
	<title>INFINARTS</title>
	<link href="public/bootstrap.min.css" rel="stylesheet"/>
	<link href="public/fonts/stylesheet.css" rel="stylesheet"/>
</head>
<body>

<!--section-->
<div class="bg_wrapper" style="background-image: url('public/img/bg.jpg')">
	<div class="container min-vh-100 d-flex align-items-center py-5">
		<div>
			<div class="row justify-content-center align-items-center justify-content-md-between">
				<div class="col-6 col-lg-3 col-xl-3 col-xxl-3 mb-5 mb-lg-0">
					<img alt="Logo" src="public/img/logo.svg"/>
				</div>
				<div class="col-12 col-lg-9 col-xl-7 col-xxl-6 d-flex justify-content-end">
					<nav class="nav main_nav justify-content-center">
						<a class="nav-link" href="#about"><img alt="link" src="public/img/btn-about.svg"/></a>
						<a class="nav-link" href="#"><img alt="link" src="public/img/btn-works.svg"/></a>
						<a class="nav-link" href="#"><img alt="link" src="public/img/btn-get-started.svg"/></a>
					</nav>
				</div>
			</div>
			<div class="row py-5 justify-content-between align-items-center">
				<div class="col-lg-6 col-xxl-5 text-end">
					<h1 class="landing-title-1">CREATE A CREATIVE</h1>
					<h2 class="landing-title-2">AND MEANING FULL</h2>
					<div class="landing-title-3 display-2">LOGO</div>
				</div>
				<div class="col-lg-6 col-xxl-7 text-end">
					<img alt="ecocart" class="w-100" src="public/img/ecocart.png">
				</div>
			</div>
			<div class="d-flex flex-column flex-md-row align-items-center justify-content-around main_nav py-5">
				<div>
					<a class="nav-link" href="#contact"><img alt="link" src="public/img/btn-get-started.svg"/></a>
				</div>
				<div>
					<a class="nav-link" href="#"><img alt="link" src="public/img/btn-view-works.svg"/></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--section 2-->
<div class="bg_wrapper" id="portfolio" style="background-image: url('public/img/bg.jpg')">
	<div class="container min-vh-100 d-flex align-items-center py-5">
		<div>
			<div class="row justify-content-center">
				<div class="col-md-9 col-lg-8 col-xl-7 text-center">
					<h1 class="text-primary fw-bold">OUR PORTFOLIO</h1>
					<h4>We have a deep understanding of user habits and behaviors. We are committed to using fact-based
						knowledge and our unique brand of innovation to help you dominate the competition.</h4>
				</div>
			</div>
			<div class="row py-5">
				<div class="col-12 col-md-3 d-flex flex-column">
					<div class="bg_wrapper bg_side w-100 mb-3" style="background-image: url('public/img/01_Business Card_Mockup.jpg')"></div>
					<div class="bg_wrapper bg_side w-100 mt-3" style="background-image: url('public/img/letterhead mockup.jpg')"></div>
				</div>
				<div class="col-12 col-md-6 d-flex flex-column">
					<div class="bg_wrapper bg_center w-100" style="background-image: url('public/img/ecokart-center.jpg');"></div>
				</div>
				<div class="col-12 col-md-3 d-flex flex-column">
					<div class="bg_wrapper bg_side w-100 mb-3" style="background-image: url('public/img/01_ECOKART_Mockup.jpg')"></div>
					<div class="bg_wrapper bg_side w-100 mt-3" style="background-image: url('public/img/02_ECOKART_Mockup.jpg')"></div>
				</div>
			</div>
			<div class="d-flex flex-column align-items-center flex-md-row justify-content-around pt-5 other_nav">
				<div class="mb-4">
					<a href="#"><img alt="link" src="public/img/btn-view-morelogo-works.svg"></a>
				</div>
				<div class="mb-4">
					<a href="#"><img alt="link" src="public/img/btn-get-logo-quote.svg"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--section-->

<div class="bg_wrapper" id="about" style="background-image: url('public/img/bg-2.jpg')">
	<div class="container min-vh-100 d-flex align-items-center py-5">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<h1 class="fw-bold text-primary">WHO WE ARE</h1>
				<p>Infinarts has a proud team of young and vibrant creative professionals, always enthusiastic and on
					the verge of artistic innovation. We conceptualise creative ideas to bring forth significant
					momentum for your product in all the marketing platforms through design, branding, content and
					advertising. Experienced to provide you with the best solutions, our team comes with the knowledge
					and practice across the industry; we hone the skills of photography, ad film making, copywriting,
					design, and social media marketing.</p>
				<p>Infinarts believes in understanding the client's requirements to provide an original solution and
					bring authentic results. A designated team of professionals will sit with the client for a series of
					discussions to understand the client's product and its requirements in the market. Our team of
					experts will, then, strategize a creative campaign designed specifically for the client's
					requirement. The campaign will go live on desired social media platforms to reach the target
					audience and create a buzz around the product and the brand.</p>
				<div class="d-flex flex-column align-items-center flex-md-row justify-content-around pt-5 other_nav">
					<div class="mb-4">
						<a href="#"><img alt="link" src="public/img/btn-view-profile.svg"></a>
					</div>
					<div class="mb-4">
						<a href="#"><img alt="link" src="public/img/btn-enquiry.svg"></a>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="bg-white p-4 p-lg-5 shadow rounded">
					<h2 class="mb-4 fw-bold text-white py-2 text-center bg-primary rounded-3">OUR SERVICES</h2>
					<ul class="custom_list">
						<li>LOGO DESIGN</li>
						<li>GRAPHIC DESIGN</li>
						<li>WEB DESIGN</li>
						<li>COPY WRITING</li>
						<li>DIGITAL MARKETING</li>
						<li>PHOTOGRAPHY</li>
						<li>AD FILM MAKING</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!--section-->

<div class="bg_wrapper" id="contact" style="background-image: url('public/img/bg-2.jpg')">
	<div class="container min-vh-100 d-flex align-items-center py-5">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<h1 class="fw-bold text-primary">OUR WORK STYLE</h1>
				<p>The journey to a thousand followers begins with the first step.</p>
				<p>We, at infinarts, begin our work for each product/service from the initial stage. Our process is
					broken down to help you understand how we work.</p>
				<ul>
					<li>Help the client decide the right name for their products and design the logo that reflects on
						the
						name and the product offered.
					</li>
					<li>Ensure that the package is designed to appeal the audience/customers while retaining its
						originality.
					</li>
					<li>Schedule a professional photo and video shoot of the product to provide a visual aid for the
						audience to learn.
					</li>
					<li>Creating and strategizing innovative ad campaigns designed around the client's requirement and
						the target audience's preferences.
					</li>
					<li>Understand each platform's (print, social media, etc) success rate for the desired product and
						audience, strategically running the ads and campaigns to bring more traffic for the client's
						brand and converting it into a successful business.OUR WORK STYLE
					</li>
				</ul>
			</div>

			<div class="col-lg-5">
				<div class="bg-white p-4 p-lg-5 shadow rounded">
					<h2 class="mb-4 fw-bold text-primary">UNIQUE LOGO DESIGN IN AFFORDABLE PRICE</h2>
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="form-floating mb-3">
							<input class="form-control" id="name" name="name" placeholder="Name" required type="text">
							<label for="name">Name</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="email" name="email" placeholder="Email" required type="email">
							<label for="email">Email address</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="mobile" name="mobile" placeholder="Contact No." required type="text">
							<label for="mobile">Contact No.</label>
						</div>
						<div class="form-floating mb-3">
							<textarea class="form-control" id="message" name="message" placeholder="Message / Queries" style="height: 100px"></textarea>
							<label for="message">Message / Queries</label>
						</div>
						<div style="display: none">
							<input id="sdafiuoy" name="sdafiuoy" type="text" value=""/>
							<label for="sdafiuoy"></label>
						</div>
						<div class="text-center mt-5">
							<p>We Do Creative & Trendy Logo Design.</p>
							<button class="main_nav bg-transparent p-0 border-0" type="submit">
								<img alt="btn" src="public/img/btn-lets-go.svg">
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>
