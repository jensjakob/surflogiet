<html>
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
		</style>
	</head>
	<body>
		<header>
			<a href="/"><img class="logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo_white.png"></a>
		</header>
		<div id="content">
			<div class="form">
				<h2>Boka aktivitet</h2>
				<p>Truffaut skateboard street art PBR jean shorts Shoreditch farm-to-table Austin lo-fi Odd Future occupy. Chia semiotics skateboard, Schlitz messenger bag master cleanse High Life occupy vegan polaroid tote bag leggings. Organic photo booth cray tofu, vegan fixie bitters sriracha.</p>

				<p class="status_msg"></p>

				<form action="" method="post">
		
		<style>
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
			border: 1px solid gray;
			box-sizing: border-box;
			font-family: 'Edmondsans', 'Open Sans', sans-serif;
			font-size: 14px;
			color: #545454;
		}
		.form .button {
			/* display: inline; */
			width: unset;
			margin-top: 10px;
			padding: 10px 20px;
			background-color: #DDC79C;
			font-weight: 500;
			text-transform: uppercase;
			text-decoration: underline;
			border: 1px solid black;
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

			<div class="cols">
				<div class="col1">
					<label for="activity">Aktivitet:</label>
					<select id="activity" name="activity">
						<option>STAND UP PADDLE GUIDAD TUR</option>
						<option>STAND UP PADDLE YOGA</option>
						<option>KAJAKUTFLYKT MED PRIVAT GUIDE</option>
						<option>KIDS SUMMER SURF</option>
					</select>

					<div class="fifty-fifty">
						<div>
							<label for="date">Datum:</label>
							<input id="date" name="date" type="date">
						</div>
						<div>
							<label for="people">Antal personer:</label>
							<input id="people" name="people" type="number" min="0" max="1000">
						</div>
					</div>

					<label for="name">Namn:</label>
					<input id="name" name="name" type="text">

					<label for="email">E-post:</label>
					<input id="email" name="email" type="email">
					
					<label for="phone">Telefon:</label>
					<input id="phone" name="phone" type="tel">
				</div>
				<div class="col2">
					<label for="message">Meddelande:</label>
					<textarea id="message" name="message" rows="10"></textarea>
					<input class="button" type="submit" value="Skicka">
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
var $msg = $(".status_msg");
$this.css({opacity: 0.3});
$.ajax({
	type: "POST",
	url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
	data: data,
	success: function (json) {
		$this.css({opacity: 1});
		if(json.status === 'OK'){
			$msg.html(json.msg);
			$msg.removeClass("error");
			$this.slideUp();
		}else{
			$msg.html(json.msg);
			$msg.addClass("error");
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