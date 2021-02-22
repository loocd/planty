<?php
    $message_sent = false;
    if (isset($_POST['submit'])) {

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

            $name = $_POST['name'];
            $mailFrom = $_POST['email'];

        
            $mailTo = "contact@loocd.ch";
			$betreff = $name ." subscribed to planty updates";
			$txt = "<html>";
			$txt .= "<body>";
			$txt .= "<h1 style='font-size: 20px; color: #224222;'> New Subscriber </h1>";
			$txt .= "<p><em>".$name."</em> just subscribed to updates on planty with their e-mail <em>".$mailFrom ."</em>.";
			$txt .= "</body></html>";

			$headers = "From: " .$mailFrom ."\r\n";
			$headers .= "Reply-To: ".$mailFrom ."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=utf-8\r\n";

			
			$betreffSender = "Sorry to disappoint";
			$txtSender = "<html>";
			$txtSender .= "<body>";
			$txtSender .= "<h1 style='font-size: 20px; color: #224222;'> Sorry </h1>";
			$txtSender .= "<p>Planty is just made up... So unfortunately, you won't be receiving any updates. Good luck with your plants, though ¯\_(ツ)_/¯";
			$txtSender .= "</body></html>";
			
			$headersSender = "From: contact@loocd.ch\r\n";
			$headersSender .= "MIME-Version: 1.0\r\n";
			$headersSender .= "Content-Type: text/html; charset=utf-8\r\n";
			
			
			mail($mailTo, $betreff, $txt, $headers);
			mail($mailFrom, $betreffSender, $txtSender, $headersSender);




            $message_sent = true;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
		/>
		<title>Planty</title>

		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Round"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="additional.css" />
		<link rel="stylesheet" href="https://use.typekit.net/ptd8ard.css" />

		<!-- Favicons -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/assets/images/favicon/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/assets/images/favicon/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/assets/images/favicon/favicon-16x16.png"
		/>
		<link rel="manifest" href="/assets/images/favicon/site.webmanifest" />
		<link
			rel="mask-icon"
			href="/assets/images/favicon/safari-pinned-tab.svg"
			color="#528252"
		/>
		<link rel="shortcut icon" href="/assets/images/favicon/favicon.ico" />
		<meta name="apple-mobile-web-app-title" content="Planty" />
		<meta name="application-name" content="Planty" />
		<meta name="msapplication-TileColor" content="#528252" />
		<meta
			name="msapplication-config"
			content="/assets/images/favicon/browserconfig.xml"
		/>
		<meta name="theme-color" content="#f4e7ce" />
	</head>
	<body>
		<div class="jumbotron jumbotron-fluid mb-0 bg-secondary vh-100">
			<nav class="navbar fixed-top">
				<div class="container d-flex align-items-center">
					<a href="index.php" class="nav__logo text-secondary">planty</a>
					<a href="#signup" class="nav__signup text-accent">Sign Up</a>
				</div>
			</nav>

			<div class="container container--hero hero-grid">
				<div class="row">
					<div class="hero__text col-12 col-lg-7 col-xl-8">
						<h1 class="mb-1 w-80">
							Your Plant's Best&nbspFriend
						</h1>
						<div class="subtitle w-80">
							planty helps you make the best&nbspof&nbspyour&nbspplants
						</div>
						<a href="#learnmore" class="btn btn-accent btn--hero mt-4 mt-xl-5"
							>Learn More</a
						>
					</div>
					<div class="hero__img col-lg-5 col-xl-4">
						<img
							src="assets/images/illustratedPlants.svg"
							alt="illustration"
							class="d-none d-lg-block hero__plantIllustration"
						/>
					</div>
				</div>
			</div>
			<div class="workaround-background"></div>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 1125 1286.5"
				class="wave-container"
				preserveAspectRatio="none"
			>
				<rect style="fill: var(--primary);" width="1125" height="877.1" />
				<path
					class="wave1"
					d="M0 866.5v55l1125-393V0h-0.1C927.1 822.8 123 526.5 0 866.5z"
				/>
				<path
					class="wave2"
					d="M0 904.5v59l1125-278v-462C934 848.5 150 596.5 0 904.5z"
				/>
				<path
					class="wave3"
					d="M0 933.9v352.6h1125V467.7C949.5 855.5 136.8 726.5 0 933.9z"
				/>
			</svg>
			<!-- waves -->
		</div>
		<div id="learnmore" class="anchor-offset"></div>
		<section class="bg-secondary text-primary">
			<div class="container container--learnmore">
				<div class="row align-items-center">
					<div class="planty-grid__child col-12 col-md-6">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 191.1 303.9"
							class="planty-illustration"
						>
							<style type="text/css">
								.st0 {
									fill: var(--secondary-light);
								}
								.st1 {
									fill: var(--primary);
								}
							</style>
							<path
								class="st0"
								d="M154 114.8c4.4-14.3 8.8-28.6 6-43.9 -0.3-1.4 0.2-3.3-1.6-3.8 -1.8-0.5-2.5 1.4-3.5 2.3 -0.6 0.6-1.1 1.3-1.4 2 -8.4 14.9-15.9 30.3-22.4 46.2 -1.6 3.9-2.1 8.3-4.5 12.1 -0.6-0.9-0.7-2-0.3-3 4.8-21.4 5-43.2 4.5-65 -0.1-6.2-1.4-12.2-2.7-18.2 -0.3-1.3-0.7-2.8-2.4-2.8 -1.6 0.1-2 1.5-2.2 2.9 -1.5 7.7-3 15.3-4.5 23 -2.1 11-4.1 22-6.2 33 -0.1-21 1.4-41.9 2.7-62.7 0.6-10 1-19.9 1.1-29.9 0-2.4 0.4-6.2-2.6-6.8 -2.5-0.5-2.7 3.3-4.1 5 -0.9 1.2-1.6 2.5-2.1 3.8 -11 27.2-15 55.7-15.9 84.8 0 1.4 0.6 3-1.4 4.1 -0.2-1.2-0.4-2.3-0.6-3.4 -2-15.6-3.5-31.3-6-46.9 -2.1-13.1-3.2-26.5-8.3-39C75 7 74.6 4.7 72.3 4.9c-2.3 0.2-2.8 2.3-3.1 4 -0.7 4.3-1.2 8.5-1.7 12.8 -2.8 20.8-3.9 41.7-3.3 62.6l0.4 6.4c0 0.2-1.1 0.3-1.3 0 -0.6-1.8-0.9-3.6-1-5.4 -2.2-12.4-4.3-24.9-8.5-36.8 -0.8-2.1-1.1-5.8-4.3-5.2 -2.2 0.5-2.1 3.8-2.4 6.1 -1.9 14.7-2 29.5-0.1 44.2 0.4 3.2-0.9 6.7 1.2 9.7 2.3 5.2 1.9 10.9 3.3 16.3 -1.7-3.6-4-7-4.5-11.1C41.6 93.3 36.3 78 30.7 62.8c-0.9-2.6-1.6-7-5.1-6.3 -3.5 0.7-2.7 4.9-2.8 7.7 -0.1 13.8 0.8 27.6 2.7 41.2 2.2 16.1 6.9 31.4 18 43.8 1.2 1.3 0.3 2.1-0.5 3 1.7 1.8 4.4 2.3 5.7 4.5 4 3.1 8.4 5.9 12.2 9.2 17.7 2.1 35.5 2.5 53.2 0.3 4.4-0.6 9-0.2 13.1-2.7 2.3-2 12.7-2.7 15.5-4.1 1.5-3-4.8-6.1-1.5-6 1.6 0.1 3.4 0.2 4.6-1.2 -1.5-1-3.2-0.8-4.8-0.8 -3-0.1-4-0.8-1.9-3.7C146.4 137.8 150.4 126.4 154 114.8zM65.1 133.5L65.1 133.5c0-0.1 0-0.2 0-0.3 -3.5-11.7-5.4-23.7-7.2-35.7 0-3 1-1 1.2-0.3 2.4 11.3 4.8 22.7 7.2 34 2.3 4.8 1.9 10.1 3.3 15.2C68.1 142.1 65.1 138.3 65.1 133.5zM72.5 108.5c3.5 8.5 3.7 17.7 5.2 26.7C74.2 126.8 72.4 117.7 72.5 108.5zM78.7 110.2L78.7 110.2c-3.5-15.7-3.7-30.8-4.6-45.8 -1-5.3-1-10.5-0.9-16.8 2.1 6.4 2.5 12 2.6 17.8 0.9 12 1.8 24.1 2.8 36.1C79 104.4 79 107.3 78.7 110.2zM102.7 110.2L102.7 110.2c-0.3-14.2 2.1-28.2 4.4-42.1C108.5 82.5 103.8 96.2 102.7 110.2zM120.8 95.5c-1.5-3.1 1.4-14.9 3.8-17.8C124.3 81 122.3 93 120.8 95.5z"
							/>
							<path
								class="st1"
								d="M188.7 209c-1.5-0.6-3.6-0.3-4.9-2 1.4-1.3 2.6-2.3 3.8-3.5s3-2.4 1.7-4.1c-1.4-1.9-3.3-0.6-4.9 0.4 -1.1 0.7-2.1 1.4-3.5 2.3 -0.3-2.1-0.5-3.9-0.9-5.6 -0.3-1.5-0.7-3.1-2.7-2.8 -1.8 0.3-2.3 1.8-2.4 3.3 -0.1 1.8 0.1 3.7 0.1 5.5 0 2.2 0.8 4.9-0.2 6.4 -3.7 5.3-8 10.2-12.8 16.1 0-2.6-0.1-3.9 0-5.1 1-13.6 2-27.2 2.9-40.8 0.2-3.2-0.5-6.7 0.5-9.6 1.1-3.3 1.5-6.7 1.2-10.2 -0.1-3.1-1.8-4.2-4.1-4.6 -5.6-0.9-11.2-1.5-16.7-2.3 -2.5-0.1-4.9-0.1-7.4 0 -2.8 0.3-5.5 0.9-4.5 4.9 2 2.3 4.8 1.3 7.4 1.4 -3 0.1-6 0.7-8.9 1.7 -1.6 0.5-3.2 0.9-4.5 2 -22.5 5.3-45.2 4.6-68 2.1 -1.1-0.8-2.4-1.3-3.7-1.3 -9.6 0-19.1-1.8-28.6-3 0.6-0.2 1.1-0.3 1.6-0.4 6.6-1.3 13.2-2.4 19.8-3.5 -0.8-3.2-3.2-3.8-6-4 -1.3 0.2-2.6 0.5-3.9 0.8 -5 1.9-12 2.1-16.1 6.7 -3.5 2.1-5.1 13.1-1.9 16.1 2.7 2.4 2.8 5 2.5 8 -1.1 11.5-1.3 23-0.7 34.6 -0.1 1.7-0.3 3.4-0.5 5.9 -2.6-3.3-4.4-6.4-7-8.4 -3.5-2.6-4.4-5.7-4.8-9.7 -0.2-1.9 0.4-5.8-2.8-5.3 -3.4 0.5-2.8 3.9-2.1 6.6 0 0.5-0.1 0.9-0.2 1.4 -1.9-0.2-4.1-2.3-5.3 0.3 -1.6 3.3 2 3.9 3.2 5.1 -1 1.2-2 2.3-2.9 3.5 -0.7 1-1.2 2.1-0.1 3.2 0.8 0.9 2.2 1.1 3.2 0.4 2.4-1.3 5.2-3.6 7.5-2.6s3.4 4.2 5.1 6.5c1.2 1.7 2.4 3.4 3.7 5.1 2.7 2.8 3.4 6.1 3.5 9.9 0.3 8 0.9 15.9 1.5 23.9 0.4 5.2 2.8 8 7.9 8.7 10.4 1.3 20.2 5.3 30.6 6.7 1.6 0.2 2.6 0.7 2.3 2.4 -1.1 5.9 2 12.9-4.6 17.3 -1.2 0.7-1.6 2.2-0.9 3.3 0 0.1 0.1 0.1 0.1 0.2 1.1 1.6 2.4 0.5 3.5 0 4.3-2 7.5-4.8 7-10.2 -0.1-2.8-0.1-5.7 0.1-8.5 0.1-2.4 0.9-3.6 3.7-3.3 9.6 1.2 19.2 1.5 28.8 0.8 2.8-0.2 3.9 0.2 3.4 3.4 -0.7 3.6-0.7 7.3 0 10.9 0.7 3.3 2.3 5.8 6 6.4 1.5 0.4 3.1-0.4 3.5-1.9 0.7-1.6 0-2.6-1.3-3.2 -2.4-1.2-2.5-3.3-2.5-5.5 0.2-2.8 0.1-5.6-0.1-8.5 -0.4-2.5 0.5-2.7 2.6-3 5.6-0.7 11.3-1.3 16.8-2.4 20-4.1 25.3-7.5 27.3-27.9 0.5-5.1 1.1-10.3 1.5-15.4 0-2.2 1.2-4.1 3.2-5.1 4.4-2.5 8-6 10.7-10.3 3-4.8 6-8.1 12.1-5.5 0.5 0.2 1 0.2 1.5 0.1 1.4 0 2.6-1 2.8-2.4C191.3 210 190.1 209.5 188.7 209zM155.8 223.8L155.8 223.8c-0.9 11.4-1.8 22.8-3.1 34.1 -0.6 5.3-3.5 9.5-9.1 11.3 -14.9 4.7-30.2 6.8-45.6 7.3 -17.3 0.7-34.6-1.2-51.3-5.8 -4.1-1.3-8.4-2-12.7-2.2 -2.7 0-3.7-1.1-3.9-3.9 -1.3-18.6-2.1-37.1-1.7-55.7 0.2-8.5 0.7-16.9 0.9-25.3 0.1-2.4 0.5-2.5 2.8-2.2 26.2 3.4 52.4 5.4 78.9 3.4 16.9-1.3 33-5.6 48.7-11.4C158.4 190.4 157.2 207.1 155.8 223.8zM159.3 168.3L159.3 168.3c-5.5 1.9-11 3.7-16.6 5.5 -16.7 5.3-33.9 5.8-51.2 5.9 -17.3 0.3-34.5-2-51.8-2.7 -4.6-0.3-9.2-1.3-13.5-3.1 -3.6-1.3-1.1-4.7-1.2-7.1 -0.1-2 1.8-1.2 3.1-0.9 16.6 4.3 33.6 3.8 50.5 4.9 13.8 0.8 27.6 0.3 41.2-1.7 12.7-1.8 25-5.4 37.4-8.4 1.5-0.4 4-2.8 4.9 0.4C162.9 163.9 162.8 167 159.3 168.3z"
							/>
							<path
								class="st1"
								d="M104 233.2c-7.5 4.4-14.8 3.2-22.2 0 -1.6-0.7-3.8-2.2-5.2 0.5 -1.2 2.5 0.2 4.2 2.3 5.2 4.6 2.4 9.7 3.8 14.9 4.3 5.8 0 10-2 13.4-5.7 1-1.2 2.8-2.2 1.3-4.2S105.3 232.4 104 233.2z"
							/>
							<path
								class="st1"
								d="M67.3 213.4c-2.8 0-3.7 2.3-3.6 4.5 0 2.5 2.1 3.9 4.4 3.8 2.7 0 3.1-2.6 3.8-4.8C71.4 214.8 69.5 213.3 67.3 213.4z"
							/>
							<path
								class="st1"
								d="M118.6 221.6c2.8 0.1 4-1.8 4.2-4.5 0-2.2-1.3-3.9-3.4-4 -2.3 0-4.5 1-4.5 4.1C115 219.7 116.1 221.5 118.6 221.6z"
							/>
						</svg>
					</div>
					<div class="planty-grid__child col-12 col-md-6 pt-md-5 mt-md-5">
						<div class="easy-as-123 mb-5">
							It's easy as 1,&nbsp2,&nbsp3&nbsp...
						</div>
						<a href="#todo" class="text-primary link-todo"
							>here's what you need&nbspto&nbspdo</a
						>
					</div>
				</div>
			</div>
		</section>
		<div id="todo" class="anchor-offset"></div>
		<section class="bg-primary">
			<div class="container todo-grid text-center my-auto">
				<div class="row row--todo">
					<i
						class="material-icons icons--todo py-2 py-lg-0 col-8 offset-2 col-lg-1 offset-lg-3 my-auto"
						>filter_center_focus</i
					>
					<div
						class="todo__steps col-8 offset-2 col-lg-5 offset-lg-0 my-auto text-lg-left"
					>
						Take a picture of your plant, so that
						<span class="logo-inline">planty</span> can identify it, then give
						your plant a name
					</div>
				</div>
				<div class="todo__line"></div>
				<div class="row row--todo">
					<i
						class="material-icons icons--todo py-2 py-lg-0 col-8 offset-2 col-lg-1 offset-lg-3 icons--todo--line my-auto"
						>favorite_border</i
					>
					<div
						class="todo__steps col-8 offset-2 col-lg-5 offset-lg-0 my-auto text-lg-left"
					>
						Let <span class="logo-inline">planty</span> tell you exactly what
						your plant needs to stay healthy and to prosper
					</div>
				</div>
				<div class="todo__line"></div>
				<div class="row row--todo mb-5">
					<i
						class="material-icons icons--todo py-2 py-lg-0 col-8 offset-2 col-lg-1 offset-lg-3 icons--todo--line my-auto"
						>loop</i
					>
					<div
						class="todo__steps col-8 offset-2 col-lg-5 offset-lg-0 my-auto text-lg-left"
					>
						Update the picture monthly and
						<span class="logo-inline">planty</span> will help keep your plants
						looking fabulous
					</div>
				</div>
				
				<a href="#signup" class="btn btn-lg btn-accent mt-4 mt-xl-5 mx-auto"
							>Sign Up</a
						>
			</div>
		</section>
		<section class="bg-secondary-light text-primary section--signup">
			<div class="container container--signup">
				<div class="row row--signup align-items-center">
					<div
						class="col-12 col-md-7 col-lg-6 offset-lg-1 col--signup col-xl-7 order-1-2 signup__img-container"
					>
						<div class="img--signup"></div>
					</div>
					<div
						class="signup--signup col-12 col-sm-8 offset-sm-2 col-md-5 offset-md-0 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1 order-2-1"
					>
						<div id="signup" class="anchor-offset"></div>
						<div class="signup-text">
							<span class="logo-inline text-primary">planty</span> is still just
							a sprout - be the first to get it as soon as it's ready:
						</div>

						<?php
				if($message_sent):
				?>
				<div class=" alert alert-primary mt-5 d-flex align-items-center fade show" role="alert">
					<p class="mb-0 pr-1">Thanks for signing up! Please check your inbox. </p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
				else:
				?>
						<form action="index.php#signup" method="POST">
							<div class="form-group mt-4">
								<label for="name">Name</label>
								<input
									type="text"
									class="form-control mb-3 input--width"
									id="name"
									name="name"
									required
								/>
								<label for="email">E-Mail</label>
								<input
									type="email"
									class="form-control mb-3 input--width"
									id="email"
									name="email"
									required
								/>
								<button type="submit" class="btn btn-accent" name="submit">
									Stay informed
								</button>
							</div>
						</form>
					<?php
				endif;
				?>
					</div>
				</div>
			</div>
		</section>
		<script
			src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
			integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
			crossorigin="anonymous"
		></script>
		<script src="additional.js"></script>
	</body>
</html>
