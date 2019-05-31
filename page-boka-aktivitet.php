<?php
	$activity = $_GET['activity'];

	if ($_GET['lang'] == 'en'):
		$lang = 'en';
	else:
		$lang = 'sv';
	endif;
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head() ?>
		<style>
			html, body {
				margin: 0;
				padding: 0;
				font-family: 'Edmondsans', 'Open Sans', sans-serif;
				font-size: 14px;
				color: #545454;
			}
			.hide,
			.lang-sv .en,
			.lang-en .sv {
				display: none;
			}
			h1, h2, h3 {
				text-transform: uppercase;
				letter-spacing: 0.05em;
				font-weight: 500;
			}
			h1, h2 {
				display: inline-block;
				padding-bottom: 0.4em;
				border-bottom: 3px solid #545454;
			}
			p,
			li {
				line-height: 1.45em;
			}
			header {
				background-color: #DDC79C;
				padding: 40px;
				background-image: url('<?php echo content_url() ?>/uploads/<?php echo $activity ?>.jpg');
				background-position: <?php echo ($activity == 'kajak') ? "0 65%" : "center" ?>;
				background-size: cover;
			}
			header .logo {
				display: block;
				width: 200px;
				max-width: 50%;
				margin: 0 auto;
				
			}
			#content {
				max-width: 720px;
				margin: 0 auto;
				padding-top: 20px;
			}
			@font-face {
				font-family: "Edmondsans";
				src: url("<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/Edmondsans-Medium.woff2") format("woff2");
				font-weight: 500;
				font-style: normal;
			}
			@font-face {
				font-family: "Edmondsans";
				src: url("<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/Edmondsans-Regular.woff2") format("woff2");
				font-weight: 400;
				font-style: normal;
			}

			/* FORM */
			.form form {
				width: 100%;
			}
			.form h2,
			.form p {
				margin: 10px;
			}
			label {
				display: block;
				font-size: 12px;
				font-weight: 500;
				text-transform: uppercase;
				margin-top: 1em;
			}
			.form input,
			.form textarea,
			.form select {
				padding: 5px;
				width: 100%;
				color: #545454;
				border: 1px solid #DDC79C;
				border-radius: 4px;
				box-sizing: border-box;
				font-family: 'Edmondsans', 'Open Sans', sans-serif;
				font-size: 14px;
			}
			.form .button {
				/* display: inline; */
				width: unset;
				margin-top: 10px;
				padding: 10px 20px;
				color: black;
				background-color: #DDC79C;
				font-weight: 500;
				text-transform: uppercase;
				text-decoration: underline;
				float: right;
			}
			.form .cols {
				display: flex;
				flex-wrap: wrap;
			}
			.form .col1,
			.form .col2 {
				padding: 0 10px;
				width: 320px;
				min-width: 250px;
				flex-grow: 1;
			}
			.form #date {
				padding: 2px;
			}
			.form #phone {
				width: 50%;
			}

			.fifty-fifty {
				display: flex;
			}
			.fifty-fifty div:nth-child(1) {
				padding-right: 10px;
			}
			.fifty-fifty div {
				width: 50%;
			}
		</style>
	</head>
	<body>
		<header>
			<a href="/"><img class="logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.png"></a>
		</header>
		<div id="content">
			<div class="form">
				<h2 class="sv">Boka aktivitet</h2>
				<h2 class="en">Book activity</h2>
				<p></p>

				<div class="hide status_ok">
					<p class="sv">Din förfrågan har skickats!</p>
					<p class="en">Your request has been sent!</p>
				</div>

				<div class="hide status_error">
					<p class="sv">Något gick fel 🤔 Vänligen kontakta oss via e-post istället. Tack.</p>
					<p class="en">Something went wrong 🤔 Please send us an email instead. Thanks.</p>
				</div>

				<form action="" method="post">
		
				<div class="cols">
					<div class="col1">
						<label class="sv" for="activity">Aktivitet:</label>
						<label class="en" for="activity">Activity:</label>
						<select id="activity" name="activity">
							<option> </option>
							<option class="sv" <?php if ($activity == 'sup' && $lang == 'sv') echo "selected"; ?>>STAND UP PADDLE GUIDAD TUR</option>
							<option class="en" <?php if ($activity == 'sup' && $lang == 'en') echo "selected"; ?>>GUIDED STAND UP PADDLEBOARD TOUR</option>
							<option class="sv" <?php if ($activity == 'sup-yoga' && $lang == 'sv') echo "selected"; ?>>STAND UP PADDLE YOGA</option>
							<option class="en" <?php if ($activity == 'sup-yoga' && $lang == 'en') echo "selected"; ?>>STAND UP PADDLEBOARD YOGA</option>
							<option class="sv" <?php if ($activity == 'kajak' && $lang == 'sv') echo "selected"; ?>>KAJAKUTFLYKT MED PRIVAT GUIDE</option>
							<option class="en" <?php if ($activity == 'kajak' && $lang == 'en') echo "selected"; ?>>KAYAKING TOUR WITH GUIDE</option>
							<option <?php if ($activity == 'kids-surf') echo "selected"; ?>>KIDS SUMMER SURF</option>
						</select>

						<div class="fifty-fifty">
							<div>
								<label class="sv" for="date">Datum:</label>
								<label class="en" for="date">Datum:</label>
								<input id="date" name="date" type="date">
							</div>
							<div>
								<label class="sv" for="people">Antal personer:</label>
								<label class="en" for="people">Antal personer:</label>
								<input id="people" name="people" type="number" min="0" max="1000">
							</div>
						</div>

						<label class="sv" for="name">Namn:</label>
						<label class="en" for="name">Namn:</label>
						<input id="name" name="name" type="text">

						<label class="sv" for="email">E-post:</label>
						<label class="en" for="email">E-post:</label>
						<input id="email" name="email" type="email">
						
						<label class="sv" for="phone">Telefon:</label>
						<label class="en" for="phone">Telefon:</label>
						<input id="phone" name="phone" type="tel">
					</div>
					<div class="col2">
						<label class="sv" for="message">Meddelande:</label>
						<label class="en" for="message">Meddelande:</label>
						<textarea id="message" name="message" rows="10"></textarea>
						<input class="sv" class="button" type="submit" value="Skicka">
						<input class="en" class="button" type="submit" value="Skicka">
					</div>
				</div>
				</form>
			</div>
		</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
$(".form form").submit(function(e){
	e.preventDefault(e);
	var $this = $(this);
	var data = {
		activity: $this.find("#activity").val(),
		date: $this.find("#date").val(),
		people: $this.find("#people").val(),
		name: $this.find("#name").val(),
		email: $this.find("#email").val(),
		phone: $this.find("#phone").val(),
		message: $this.find("#message").val(),
		action: 'sendActivityEmail',
	};
	$this.css({opacity: 0.3});
	$.ajax({
		type: "POST",
		url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
		data: data,
		success: function (json) {
			$this.css({opacity: 1});
			if(json.status === 'OK'){
				$("status_ok").removeClass("hide");
				$("status_ok").slideUp();
			}else{
				$("status_error").removeClass("hide");
				$("status_error").slideUp();
			}
		},
		dataType: 'json'
	});
	console.log(data);
});

</script>

	<?php wp_footer() ?>
	</body>
</html>