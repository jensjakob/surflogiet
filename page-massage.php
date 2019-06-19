<?php
	if ($_GET['lang'] == 'sv'):
		$lang = 'sv';
	else:
		$lang = 'en';
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
	<body class="lang-<?= $lang ?>">
		<header>
			<a href="/?lang=<?= $lang ?>"><img class="logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.png"></a>
		</header>
		<div id="content">
			<div class="form">

				<div class="en">
					<h2>Asian yoga massage</h2>

					<p>The effect of the stretch movements - where the patient has a passive role - is similar to the one achieved by yoga. Muscles and joints are stretched out to their normal hibernation and the flexibility then increases.</p>
					<p>Since the receiver so effectively gets a deep rest and relaxation, it is good for everybody who needs to relax, release physical tensions and get in a closer contact with themselves.</p>
					<p>The treatment works in a preventive purpose as well as for you who suffers from back pain, bad shoulders or a general stiffness in the body.</p>
					<p>Asian yoga massage is given without oil and clothes on.</p>

					<h2>Booking</h2>
					<ul>
						<li>90 min, 750 kr</li>
						<li>120 min, 950 kr</li>
						<li>We want to give an optimal treatment at least 1.5 hours. That is why we choose not to offer shorter treatments.</li>
						<li>Bookable mån - fre v.28-v.33</li>
						<li>Bookable times: 09.30 am och 13.30 pm</li>
						<li>Are you a hotel guest at Surflogiet we offer you 10% discount on the treatment.</li>
						<li>Payment is offered in the center before the treatment.</li>
					</ul>

					<h2>The treatment</h2>
					<ul>
						<li>Wear soft cotton pants and a t-shirt with long or short arms.</li>
						<li>Do not eat within one hour before the treatment.</li>
						<li>At least 1½ hour treatment is recommended the first time. </li>
					</ul>

					<p>Do you have any questions you are welcome to call Kattis +46 (0)72-245 29 29</p>
				</div>

				<div class="sv">
					<h2>Asiatisk yoga massage</h2>

					<p>Effekterna av stretchrörelserna – där patienten har en passiv roll – liknar de som erhålls av yoga. Muskler och leder tänjs ut till dess normala vilolägeoch flexibiliteten ökar.</p>

					<p>Eftersom mottagaren så effektivt uppnår djup vila och avslappning, är den bra för alla som behöver varva ner, släppa fysiska spänningar och komma mer i kontakt med sig själva.</p>

					<p>Behandlingen fungerar lika bra i förebyggande syfte som för de som lider av ryggont, onda axlar eller känner sig stela i kroppen.</p>

					<p>Asiatisk Yoga Massage ges utan olja och med kläder på.</p> 

					<h2>Bokning:</h2>
					<ul>
						<li>90 min, 750 kr</li>
						<li>120 min, 950 kr</li>
						<li>För en optimal behandling krävs minst 1,5 timme. Därför har vi valt att inte erbjuda kortare behandlingar.</li>
						<li>Bokningsbart mån - fre v.28-v.33</li>
						<li>Bokningsbara tider: 09.30 och 13.30</li>
						<li>Är du hotellgäst på Surflogiet får du 10% rabatt på behandlingen.</li>
						<li>Betalning sker i anslutning till behandlingen via Swish.</li>
					</ul>
					
					<h2>Inför behandlingen:</h2>
					<ul>
						<li>Tag med ett par mjuka byxor (t ex. träningsbyxor) och en lång- eller kortärmad t-shirt.</li>
						<li>Ät ej inom en timme före behandlingen.</li>
						<li>Minst 1½ tim. behandling rekommenderas första gången.</li>
					</ul>

					<p>Har du frågor ring Kattis 072 245 29 29</p>

				</div>

				<div class="hide status_ok">
					<p class="sv">✅ Din förfrågan har skickats!</p>
					<p class="en">✅ Your request has been sent!</p>
				</div>

				<div class="hide status_error">
					<p class="sv">⚠️ Något gick fel <br>🤔 Vänligen kontakta oss via e-post istället. Tack.</p>
					<p class="en"️>⚠️️ ️️️Something went wrong <br>🤔 Please send us an email instead. Thanks.</p>
				</div>

				<form action="" method="post">
		
				<div class="cols">
					<div class="col1">
						<label class="sv" for="activity">Längd:</label>
						<label class="en" for="activity">Length:</label>
						<select id="length" name="length">
							<option> </option>
							<option>90 min.</option>
							<option>120 min.</option>
						</select>

						<div class="fifty-fifty">
							<div>
								<label class="sv" for="date">Datum:</label>
								<label class="en" for="date">Date:</label>
								<input id="date" name="date" type="date">
							</div>
							<div>
								<label class="sv" for="activity">Tid:</label>
								<label class="en" for="activity">Time:</label>
								<select id="time" name="time">
									<option> </option>
									<option class="en">09.30 am</option>
									<option class="en">13.30 pm</option>
									<option class="sv">kl. 9.30</option>
									<option class="sv">kl. 13.30</option>
								</select>
							</div>
						</div>

						<label class="sv" for="name">Namn:</label>
						<label class="en" for="name">Name:</label>
						<input id="name" name="name" type="text">

						<label class="sv" for="email">E-post:</label>
						<label class="en" for="email">E-mail:</label>
						<input id="email" name="email" type="email">
						
						<label class="sv" for="phone">Telefon:</label>
						<label class="en" for="phone">Phone:</label>
						<input id="phone" name="phone" type="tel">
					</div>
					<div class="col2">
						<label class="sv" for="message">Meddelande:</label>
						<label class="en" for="message">Message:</label>
						<textarea id="message" name="message" rows="10"></textarea>
						<input class="sv" class="button" type="submit" value="Skicka">
						<input class="en" class="button" type="submit" value="Send">
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
		length: $this.find("#length").val(),
		date: $this.find("#date").val(),
		time: $this.find("#time").val(),
		people: $this.find("#people").val(),
		name: $this.find("#name").val(),
		email: $this.find("#email").val(),
		phone: $this.find("#phone").val(),
		message: $this.find("#message").val(),
		action: 'sendMassageEmail',
	};
	$this.css({opacity: 0.3});
	$.ajax({
		type: "POST",
		url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
		data: data,
		success: function (json) {
			$this.css({opacity: 1});
			if(json.status === 'OK'){
				$(".status_ok").removeClass("hide");
				$this.slideUp();
			}else{
				$(".status_error").removeClass("hide");
				$this.slideUp();
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