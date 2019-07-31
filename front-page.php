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
			width: 100%;
			height: 100%;
			font-family: 'Edmondsans', 'Open Sans', sans-serif;
			font-size: 14px;
			color: #545454;
			box-sizing: border-box;
			background-color: white;
		}
		.hide,
		.lang-sv .en,
		.lang-en .sv,
		#sidebar,
		#content,
		.skip-to-content {
			display: none;
		}
		#topmenu {
			display: none;
			position: fixed;
			width: 100%;
			z-index: 100;
		}
		@font-face {
			font-family: "Edmondsans";
			src: url("<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/Edmondsans-Medium.woff2") format("woff2"); /* Modern Browsers */
			font-weight: 500;
			font-style: normal;
		}
		@font-face {
			font-family: "Edmondsans";
			src: url("<?php echo get_bloginfo('stylesheet_directory'); ?>/fonts/Edmondsans-Regular.woff2") format("woff2"); /* Modern Browsers */
			font-weight: 400;
			font-style: normal;
		}

		/* HEADER */
		header {
			height: 101%;
			max-height: 178vw;
			overflow: hidden;
		}
		header .layers {
			position: relative;
			height: 101%;
		}
		.layers > div {
			position: absolute;
		}
		header .layer1 {
			width: 100%;
			height: 100%;
		}
		header .layer1 img {
			min-height: 101%;
			min-width: 100%;
			filter: blur(8px);
			width: auto;
		}
		header .layer2 video {
			min-height: 101vh;
			min-width: 100vw;
		}
		header .layer3 {
			top: 0;
			height: 101%;
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		header .logo {
			color: white;
			display: block;
			width: 280px;
			max-width: 80%;
		}
		header .layer4 {
			width: 100%;
			height: 30%;
			bottom: 0;
			text-align: center;
		}
		.skip-to-content {
			width: 50%;
			height: 100%;
			min-width: 100px;
			margin: 0 auto;
		}
		.skip-to-content svg {
			position: relative;
			animation: drop 2s 1;
			top: 70%;
			margin: 0 auto;
		}
		@keyframes drop {
			0% {
				top: 0;
			}
			100% {
				top: 70%;
			}
		}
	</style>
</head>
<body class="lang-<?= $lang ?>">
	<div id="topmenu">
		<div class="sidebar-open">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
		</div>
		<div class="switch-language">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
		</div>
	</div>
	<header>
		<div class="layers">
			<div class="layer1">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/header.jpg' ), 'full'); ?>
			</div>
			<div class="layer2">
				<video playsinline autoplay muted loop>
					<source src="<?php echo content_url() ?>/uploads/surflogiet_header.mp4" type="video/mp4" />
				</video>
			</div>
			<div class="layer3">
				<img class="logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="SURFLOGIET">
			</div>
			<div class="layer4">
				<a class="skip-to-content" href="#content">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" fill="black"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				</a>
			</div>
		</div>
	</header>
	<style>
	#content {
		max-width: 720px;
		margin: 0 auto;
	}
	.divider {
		position: relative;
		height: 50px;
		margin: 10px;
	}
	.divider > div {
		position: absolute;
		top: 0;
		width: 100%;
		text-align: center;
		margin-top: 10px;
	}
	.divider .layer1 {
		height: 23px;
		border-bottom: 3px solid #DDC79C;
	}
	.circle {
		width: 50px;
		height: 50px;
		background: #DDC79C;
		margin: 0 auto;
		border-radius: 50%;
	}
	.divider .layer3 img {
		margin-top: 7px;
		width: 35px;
	}
	.reverse {
		flex-direction: row-reverse;
	}
	.infobox {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.infobox img {
		display: inline-block;
		width: 100%;
		height: auto;
	}
	.infobox .picture,
	.infobox .text {
		min-width: 250px;
		width: 300px;
		flex-grow: 1;
		margin: 10px;
	}
	.text {
		margin: 10px;
	}
	h1 {
		margin-top: 0;
		margin-bottom: 0.4em;
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
	h3 {
		margin-bottom: -10px;
	}
	p,
	li {
		line-height: 1.45em;
	}
	p.caption {
		margin: 0;
		font-size: 0.8em;
	}
	a {
		color: black;
		text-decoration: underline;
		cursor: pointer;
	}
	.go {
		margin-left: -4px;
		vertical-align: middle;
		margin-bottom: 2px;
	}
	.go svg {
		vertical-align: middle;
		margin-bottom: 2px;
	}
	#hello-video {
		position: absolute;
		top: 0;
		width: 100vw;
		height: 100vh;
	}
	.infocards {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.infocards .card {
		min-width: 220px;
		width: 220px;
		flex-grow: 1;
		margin: 10px;
	}
	.infocards.two-col .card  {
		min-width: 241px; /* breakpoint +1 */
		width: 241px;
	}
	.infocards img {
		width: 100%;
		height: auto;
	}
	.feet {
		width: 100%;
		text-align: center;
	}
	.feet img {
		width: 200px;
		max-width: 60%;
		margin: 20px 0 90px 0;
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
		display: inline-block;
		font-size: 12px;
		font-weight: 500;
		text-transform: uppercase;
		margin-top: 1em;
	}
	.form input,
	.form textarea {
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
	.form #phone {
		display: block;
		width: 50%;
	}
	</style>
	<div id="content">
		<div class="hide text userlang en">
			<p>Hej! Vill du ändra till svenska? <a class="switch-language">Byt språk</a>.</p>
		</div>
		<div id="logiet" class="divider">
			<div class="layer1"> </div>
			<div class="layer2">
				<div class="circle"> </div>
			</div>
			<div class="layer3"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logiet.png"></div>
		</div>
		<div class="infobox">
			<div class="picture">
			<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/logiet.jpg' ), 'medium'); ?>
				<p class="caption"></p>
			</div>
			<div class="text">
				<h1>Logiet</h1>
				
				<p class="sv">På Surflogiet sover du gott i de bästa sängarna som finns. Byggda i endast naturmaterial så som tagel, bomull, lin, ull och svensk fura. Vi tror att återhämtning under natten är nyckeln till sprudlande energi på dagen. Därför är vi stolta över att vara en hästensanläggning så vi kan ge dig de bästa förutsättningarna för en god natts sömn.</p>
				
				<p class="en">At Surflogiet you sleep beneath the 100yr old pines on ocean front sands and seaside sounds. Each tent is uniquely decorated, with a fully stocked bar fridge. Request champagne on arrival by the ambient fireplace that warms more than the heart. Come night, sleep tight on the best beds of the world, each handcrafted with the finest all-natural materials designed for a cosy comforting sleep. We believe night recuperations are key to sparkling energetic days, & why we take pride in being a Hästens establishment.</p>
				
				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka" class="sv">Boka</a><a href="/boka?lang=en" class="en">Book now</a></div>
				
			</div>
		</div>
		<div class="infocards">
			<div class="card">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/suite.jpg' ), 'thumb'); ?>
				<h2>Suite</h2>
				<p class="sv">Surflogiets svit är vårt absolut bekvämaste boende för dig och din partner nu när semestern har börjat. Ni sover gott i de härliga sängarna som Hästens byggt åt oss av rena naturmaterial.</p>
				<p class="en">Welcome to Surflogiet’s most luxurious accommodation, for yourself, or with the perfect partner to enjoy the vacation you dream of. With all the finer details, including your own private beach front lounging room. Evenings.. Fall asleep to waves on an exclusive lovely all-natural bed Hästens handbuilt special for you.</p>
				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka" class="sv">Boka</a><a href="/boka?lang=en" class="en">Book now</a></div>
			</div>
			<div class="card">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/double.jpg' ), 'thumb'); ?>
				<h2>Double</h2>
				<p class="sv">Ur minibaren plockar du fram välkomstdrinken, skålar och känner den euforiska känslan av lugn och ledighet. Tankarna på inkorgen rinner av dig och för en stund önskar du nästan att det inte finns någon mottagning på mobilen.</p>
				<p class="en">You take out a bottle from the ‘not so mini’ bar, sharing in a welcome toast as you feel the euphoric sensation of calm and freedom in nature. Thoughts of your inbox flows off you and for a moment you almost wish that you didn’t have reception on your mobile phone.</p>
				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka" class="sv">Boka</a><a href="/boka?lang=en" class="en">Book now</a></div>
			</div>
			<div class="card">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/lodger.jpg' ), 'thumb'); ?>
				<h2>Lodger</h2>
				<p class="sv">4 bäddade sängar när solen börjar röra sig ner mot horisonten. Precis innan barnen somnar ser du genom tältöppningen hur det röda klotet försvinner ner i havet. Utanför sitter din favorit nedsjunken i en av de sköna stolarna omlindad av ullfiltar. </p>
				<p class="en">3, 4 or 4.5 made beds for when the sun starts moving towards the horizon. Just before the kids fall asleep you can see, through the tent opening, the red globe disappear into the sea. Just outside your partner is sitting comfortably in one of the comfortable chairs wrapped in a wool blanket, awaiting you & a nightcap.</p>
				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka" class="sv">Boka</a><a href="/boka?lang=en" class="en">Book now</a></div>
			</div>
		</div>
		<div class="text">
			<p class="sv">Vi debiterar 30% av totalbeloppet i förskott. Resterande betalas i samband med utcheckningen.</p>
			<p class="en">We charge 30% of the total amount in advance. The remainder is paid in connection with the check-out.</p>

			<div class="go sv"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="https://drive.google.com/file/d/19RhZXh-2kniqyaVgEW52wOpc0WjbJd_a/view" target="_blank">Fullständiga bokningsvillkor</a></div>

			<div class="go en"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="https://drive.google.com/file/d/19RhZXh-2kniqyaVgEW52wOpc0WjbJd_a/view" target="_blank">Complete booking conditions</a></div>
		</div>
		<div id="baren" class="divider">
			<div class="layer1"> </div>
			<div class="layer2">
				<div class="circle"> </div>
			</div>
			<div class="layer3"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/baren.png"></div>
		</div>
		<div class="infobox reverse">
			<div class="picture">
			<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/baren.jpg' ), 'medium'); ?>
				<p class="caption"></p>
			</div>
			<div class="text">
				<h1>Baren</h1>
				
				<div class="sv">

					<p>Ta av dig skorna! Känn sandkornen kittla dina fötter. Solen värmer dig i ansiktet samtidigt som den tackar för sig och sakta sjunker mot horisonten.</p>

					<p>Skratt och leenden blandas i sköna toner från högtalarna. Den enkla, goda & ekologiska maten i kombination med lokala drycker avnjuts bäst i sällskap med de du älskar mest.</p>

					<p>Låt barnen springa själva bort till lekområdet eller använda naturens egna sandlåda.</p>

					<p>Här hittar du ingen meny, men du kan lita på att vi har något för barnen, vegetarianer, veganer, gluten och laktosintolleranta. Men, strandbordet då? Går det att boka för mig och mina vänner? Ring oss så kanske vi löser det! 0498-29&nbsp;79&nbsp;55<br>
					Vi ses!</p>

				</div>

				<div class="en">

					<p>Remove your shoes! Feel the grains of sand beneath your feet. The sun warms your face as it slowly says farewell and edges towards the ocean horizon.

					<p>Laughter and smiles blend with the beautiful moody tunes from the speakers. The simple, delicious and organic food in perfect combination with local drinks are best enjoyed in company with those you love the most.</p>

					<p>Let the kids run away to the playground or play with natures own sandbox.</p>

					<p>You won’t find a menu here, but you can trust us that you will find something for the kids, the vegetarians, the vegans, and the gluten or lactose intolerant. But, what about that amazing table right on the beach? Can I book it for me and my friends? Call us and maybe we'll hook you up +46-(0)498-297955</p>
					
					<p>See you soon!</p>

				</div>
			</div>
		</div>
		<div id="centret" class="divider">
				<div class="layer1"> </div>
				<div class="layer2">
					<div class="circle"> </div>
				</div>
				<div class="layer3"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/centret.png"></div>
			</div>
		<div class="infobox">
			<div class="text">
				<h1>Centret</h1>
				
				<p class="sv">Välkommen till centret. Det är hit du vänder dig när du vill boka aktiviteter eller checka in i tälthotellet. Här kan du också hyra brädor och kajaker. Öppet mellan 10.00 - 18.00.</p>

				<p class="en">Welcome to The Centre, where you excitedly come to check into the Tent Hotel. Or, to book, along with your favourite Summer activities. Here you can also rent kayaks & boards (wave, SUP, skim or body). Complementary slacklines, indo & skate boards, volleyball, kube, backgammon.<br>
				Open 10:00 - 18:00</p>

			</div>
			<div class="infocards two-col">
				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/sauna.jpg' ), 'medium'); ?>
					<h2>Sauna with a view of the Baltic Sea</h2>
					<p>Here, in the heat, you see the waves striking the shore while the sun's last rays set into the glittering sea. You can use it with others or book it exclusively for you and your best friends.</p>
					<p>100 SEK per 1/5 hour, 1000 SEK for the whole sauna.<br>
					10 seats</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=sauna&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/sauna.jpg' ), 'medium'); ?>
					<h2>Bastu med utsikt över Östersjön</h2>
					<p>Här inne i värmen ser du vågorna som slår mot strandkanten samtidigt som solens sista strålar sjunker ner i ett glittrande Östersjön. Du kan bada bastu tillsammans med andra eller boka den exklusivt för dig och dina bästa vänner.</p>
					<p>100kr 1/5 timme, 1000 kr för hela bastun.<br>
					10 platser. Ingen medhavd alkohol.</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=sauna&lang=sv">Boka nu</a></div>
				</div>

				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/tour.jpg' ), 'medium'); ?>
					<h2>Tour</h2>
					<p>We take you on a fun-filled water adventure along Tofta’s beautiful beach. Here you will learn all the tips & tricks that apply on the ocean and have a fun time together with your guide. Halfway we’ll go ashore and ‘Fika’ picnic together in the Gotlandic nature. Approx 2,5 hours. We have both SUP and Kayaks, the choice is yours!</p>
					<p>Minimum for the tour to happen is 5 people. We will call you if the Tour is canceled due to lack of registers or a stormy weather. Minimum age 15.</p>
					<p>INCLUDES: 1x board 1x paddle 1x wetsuit 1x life jacket. Organic ‘Fika’ with coffee/tea and something sweet. </p>
					<p>550 SEK/person</p>
					<p>V.28-32 Tuesdays 9.30, Thursdays 15.30</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=tour&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/tour.jpg' ), 'medium'); ?>
					<h2>Tour</h2>
					<p>Vi tar dig på ett vattenfyllt äventyr längst vackra Tofta strand och här får du lära dig alla nödvändiga tips och tricks som man behöver på havet och ha en härlig stund tillsammans med er guide. Vi går iland i det anrika fiskelägret Gnisvärd där vi fikar och njuter av den Gotländska naturen. Turen tar ca 2,5h. Vi har bade Stand Up Paddleboards och Kajaker, valet är ditt!</p>
					<p>Minst antalet anmälda för att turen skall bli av är 5 personer. Vi kommer att ringa dig om Turen skulle bli inställd pågrund av för få anmälda eller hårt väder. Minimum ålder 15.</p>
					<p>Inkluderar bräda/kajak, paddle, våtdräkt, flytväst och Fika med kaffe eller Te.</p>
					<p>550:-/person</p>
					<p>v.28-32 Tisdagar 9.30, Torsdagar 15.30</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=tour&lang=sv">Boka nu</a></div>
				</div>

				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/surfschool.jpg' ), 'medium'); ?>
					<h2>SURFSCHOOL</h2>
					<p>v.29-33<br>
					Wednesdays & Thursdays 19.00 approx 2 hours</p>
					<p>To surf is to live! Come and join our 2-day course and learn the most important skills that you need for catching your first waves. We will test our balance on the indo-board, learn paddle, popup, warmup, and stretching techniques, so even if there would be no wave for the day you will learn many important aspects that will help you when it is time. It will be a course filled with everything surfing and when we are done hopefully your inner surfersoul is more awaken then ever and you can feel comfortable to try it out on your own. It is a magical sport that connects you with nature, mind, and body all at the same time.</p>
					<p>Minimum 15 years of age<br>
					Maximum 6 people/group<br>
					3 attendants or more for the course to happen<br>
					Including board and wetsuit</p>
					<p>995:-/person</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=surfschool&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/surfschool.jpg' ), 'medium'); ?>
					<h2>SURFSCHOOL</h2>
					<p>Att surfa är att leva! Kom och joina våran 2dagars kurs och lär dig de viktigaste knepen som du behöver för att fånga dina första vågor. Vi kommer testa balansen på våra indo-brädor, lära oss paddel, popup, uppvärmnings, samt stretching tekniker, så även om det inte skulle vara några vågor på kursdagen kommer du lära dig många viktiga aspekter som kommer hjälpa dig när det väl är dags. Det kommer att vara en kurs fylld av allting surfing och när vi är klara kommer din innre surfsjäl vara mer vaken än någonsin och du kan känna dig trygg med att pröva själv. Det är en magisk sport som förenar dig med naturen, själen och din kropp, alla på en gång.</p>
					<p>V.29-33<br>
					Onsdagar och Torsdagar klockan 19.00, ca 2 timmar.</p>
					<p>Minimum ålder för att delta är 15 år<br>
					Max 6 personer per kurs<br>
					3 eller fler anmälda för att kursen skall bli genomförd<br>
					Inkluderar bräda och våtdräkt</p>
					<p>995:-/person</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=surfschool&lang=sv">Boka nu</a></div>
				</div>

				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/introclass.jpg' ), 'medium'); ?>
					<h2>STAND UP PADDLEBOARD/SURF INTROCLASS</h2>
					<p>Have you ever just wanted to jump on a Stand Up Paddleboard and take off to the horizon, or feel a surfboard under your feet while riding a wave? Let us help you with this dream. Join our sup/surf class and get the best beginner tips and tricks for enjoying the ocean on a board. Just come, grab a board and have fun with the water together with our instructor. For all ages!</p>
					<p>v.28-32 Tuesdays, Wednesdays and Thursdays 13.00 approx 1,5 hours<br>
					Minimum for the class to happen is 4 people. We will call you if the class is canceled due to lack of registers.</p>
					<p>INCLUDES: 1x board 1x paddle or leash 1x wetsuit 1x life jacket</p>
					<p>450 SEK / adult<br>
					200 SEK / for a child who tags along </p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=introclass&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/introclass.jpg' ), 'medium'); ?>
					<h2>STAND UP PADDLEBOARD/SURF INTROKLASS</h2>
					<p>Har du någonsin bara velat hoppa upp på en Stand Up Paddleboard och paddla iväg mot horisonten, eller känna surfbrädan under dina fötter medans du tar en våg? Låt oss hjälpa dig med denna dröm. Anmäl dig till våran sup/surf klass och få dem bästa nybörjartipsen för att kunna njuta av havet på en bräda. Kom förbi och greppa en bräda och ha kul i vattnet tillsammans med vår instruktör. För alla åldrar.</p>
					<p>v.28-32 Tisdagar, Onsdagar och Torsdagar klockan 13.00, ca 1,5h<br>
					Minimum för att klassen skall bli av är 4 anmälda, vi kommer ringa dig om klassen skulle bli inställd pågrund av för få amälda.</p>
					<p>Inkluderar bräda, paddel, våtdräkt och flytväst</p>
					<p>450:-/Vuxen (fr 14 år)<br>
					200:-/Barn som hänger med en vuxen</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=introclass&lang=sv">Boka nu</a></div>
				</div>

				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/private-class.jpg' ), 'medium'); ?>
					<h2>PRIVATE SUP/SURF CLASS</h2>
					<p>I love surfing, and after spending many years abroad, I have now returned home (for a while) ready to share everything I know about this life saving sport. It is so much more than just standing on a board in the water, and for me, it has changed so much in my life for the positive. Suddenly, there is a deeper knowledge and respect for nature and for energies, both within and around, I have learned how to listen to my body, what to feed it and how to train and stretch it. So many good things come from surfing and just by living a positive lifestyle, let me share some of my “lifehacks” and hopefully give you some valuable tools for in and out of the water!</p>
					<p>INCLUDES: 1x board 1x paddle 1x wetsuit 1x life jacket.</p>
					<p>Tuesdays & Wednesdays 16.00 approx 2 hours.<br>
					1500:- 1 person, 2-4 people 3000:-<br>
					For bookings over 4 people please contact me at <a href="mailto:michelle@surflogiet.se">michelle@surflogiet.se</a> and we can discuss it further.</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=private-class&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/private-class.jpg' ), 'medium'); ?>
					<h2>PRIVAT SUP/SURF KLASS</h2>
					<p>Jag älskar att surfa, och efter att ha spenderat många år utomlands har jag nu kommit hem (ett tag) redo att dela med mig av allt jag har lärt mig hittils om denna livsräddande sport. Att surfa handlar om så mycket mer än att bara stå på en bräda i vattnet, och för mig, har det förändrat mitt liv otroligt mycket åt det positiva. Plötsligt, finns det en djupare kunskap och respekt för naturen och energier, båda invändigt och utvändigt, jag har lärt mig att lyssna på min kropp, lärt mig vad jag skall äta för att ge den mest samt hur jag ska träna och stretcha den. Så många bra saker kommer från surfing och att leva en positiv livsstil. Låt mig dela några av mina "lifehacks" och förhoppningsvis ge dig några värdefulla redskap för både i och utanför vattnet.</p>
					<p>Inkluderar bräda, paddel, våtdräkt och flytväst (vid behov och önskemål)</p>
					<p>v.28-v.32 Tisdagar och Onsdagar kl 16.00, ca 2 timmar.<br>
					1500:- 1 person<br>
					3000:- 2-4 personer<br>
					För bokningar över 4 personer kontakta mig direkt på <a href="mailto:michelle@surflogiet.se">michelle@surflogiet.se</a> så kan vi diskutera möjligheterna</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=private-class&lang=sv">Boka nu</a></div>
				</div>

				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/kids-surf.jpg' ), 'medium'); ?>
					<h2>KIDS SUMMER SURF</h2>
					<p>A week for the children get to try all our water activities with our instructor to feel like real professional surfers. Day by day we work closer to the Diploma. Based on the weather conditions of the day, we try out different water & land sports like surfing, S.U.P, skateboarding and more. We will also talk about nature and the importance of being kind to it.</p>
					<p>Includes 1x wetsuit 1x life jacket & Fika</p>
					<p>START: 09.30 Tuesday - Wednesday - Thursday. (Duration 2.5 hrs)</p>
					<p>700 SEK</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=kids-surf&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/kids-surf.jpg' ), 'medium'); ?>
					<h2>KIDS SUMMER SURF</h2>
					<p>En vecka för barnen att pröva våra vattenaktiviteter tillsammans med instruktör för att känna sig som professionella surfare. Dag för dag kommer vi närmare diplomet. Barnen kommer lära sig om naturen och surfing, de kommer få testa sina balanssinnen på våra balansleksaker samt lära sig att känna sig bekväma i vattnet. Vi kommer gå igenom vikten av att vara snäll mot naturen och de kommer att lära sig en hel del nya saker och framförallt, ha väldigt kul.</p>
					<p>Start 9.30 3dagars kurs. Tisdagar, Onsdagar, och Torsdagar, ca 2 timmar<br>
					Ålder 6-10</p>
					<p>Inkluderar bräda, våtdräkt, flytväst och fika</p>
					<p>700:-/barn</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=kids-surf&lang=sv">Boka nu</a></div>
				</div>

				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/asian-yoga-massage.jpg' ), 'medium'); ?>
					<h2>Asiatisk Yoga massage</h2>
					<p>Asiatisk Yogamassage går ut på att öppna upp kroppens energiflöde samt uppnå balans genom att arbeta med kroppens energilinjer och stretcha ut muskler och leder.</p>
					<p>Med hjälp av fingrar, händer, fötter, knän och armbågar arbetar sig massören igenom muskler energilinjer och akupressurpunkter.</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/massage?lang=sv">Mer info och bokning</a></div>
				</div>
				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/asian-yoga-massage.jpg' ), 'medium'); ?>
					<h2>Asian yoga massage</h2>
					<p>Asian yoga massage is all about opening up the energy flow in the body. We also achieve a balance by working with the energy lines of the body and stretch out muscles and joints.</p>
					<p>With our fingers, hands, feet, knees and elbows we work through the muscles, energy lines and acupressure points.</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/massage">More info and booking</a></div>
				</div>
				
				<div class="card">
				</div>
			</div>
		</div>
		<div id="eventet" class="divider">
			<div class="layer1"> </div>
			<div class="layer2">
				<div class="circle"> </div>
			</div>
			<div class="layer3"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/eventet.png"></div>
		</div>
		<div class="infobox">
			<div class="picture">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/eventet.jpg' ), 'medium'); ?>
				<p class="caption"></p>
			</div>
			<div class="text sv">
				<h1>Eventet</h1>
				
				<p>Vi vet hur viktigt miljöombytet är för att kreativiteten skall börja flöda. Lämna vardagen och ta med dig kollegorna till stället ni länge kommer att prata om.</p>

				<p>Ett konferensrum närmare havet än här, blir svårt att hitta. Kanske är det just havet som har den största påverkan för ert lyckade resultat.</p>
				
				<p>Varva arbetet med ett yogapass eller en tur på S.U.P-brädan längs med Toftastranden. Dagen summeras i bastun med vidunderlig utsikt över Östersjön och när hettan blir för påtaglig, är språnget ner till vattnet knappa 30 meter.</p>
			</div>
			<div class="text en">
				<h1>Eventet</h1>
				
				<p>Events Surflogiet style are in popular demand, and are so much fun for all!</p>

				<p>Change up your environment in a creative way. It’s essential for the soul. Leave everyday life behind, and talk with us to design your very own memorable event that’s talked about in years to come. Request a romantic boho seaside wedding, a retreat where luxury meets nature, or perhaps an inspiring company conferences held seaside with the smell of fresh Swedish Pines.</p>

				<p>Our gorgeous indoor/outdoor space is specially designed to be home for all important events. </p>

				<p>What’s more, we encourage outside the box activities to stimulate, refresh, and bond your guests through fun entertainment amongst natures best elements: Yoga class, SUP/ kayak tours, sauna, hot tub (on request), movie projector nights and more..</p>
			</div>
		</div>
		<div class="form">
			<div class="sv">
				<h2>Intresseanmälan</h2>
				<p>Mattias kommer ta hand om ditt ärende. Du kan nå Mattias direkt via telefon och mail; <a href="mailto:mattias@surflogiet.se">mattias@surflogiet.se</a> och 0738 39 55 99</p>
			</div>
			<div class="en">
				<h2>INQUIRE</h2>
				<p>Mattias will take care of your inquiry. You can reach Mattias directly via telephone and mail; <a href="mailto:mattias@surflogiet.se">mattias@surflogiet.se</a> and +46-(0)738 29 55 99</p>
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
					<label for="company" class="sv">Företag:</label>
					<label for="company" class="en">Company:</label>
					<input id="company" name="company" type="text">
					
					<label for="name" class="sv">Kontaktperson:</label>
					<label for="name" class="en">Contact person:</label>
					<input id="name" name="name" type="text">

					<label for="email" class="sv">E-post:</label>
					<label for="email" class="en">E-mail:</label>
					<input id="email" name="email" type="email">
					
					<label for="phone" class="sv">Telefon:</label>
					<label for="phone" class="en">Telephone:</label>
					<input id="phone" name="phone" type="tel">
				</div>
				<div class="col2">
					<label for="message">Message:</label>
					<textarea class="message sv" name="message" rows="10">Hej Surflogiet.
Vi är ett företag som älskar ert koncept. Kan ni hjälpa oss att ge förslag på mat, boende och aktivitet för oss?

Vi blir ungefär X personer.

Tack!</textarea>
					<textarea class="message en" name="message" rows="10"></textarea>
					<input class="button sv" type="submit" value="Skicka">
					<input class="button en" type="submit" value="Send">
				</div>
			</div>
			</form>
		</div>

		<div id="kontakt" class="divider"><span id="jobb"></span>
			<div class="layer1"> </div>
			<div class="layer2">
				<div class="circle"> </div>
			</div>
			<div class="layer3"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/kontakt.png"></div>
		</div>
		<div class="infobox">
			<div class="picture">
				<video width="100%" preload="metadata" controls="controls"><source type="video/mp4" src="<?php echo content_url() ?>/uploads/surflogiet_rekrytering.mp4" /></video>
			</div>

			<div class="text sv">
				<h1>Sök jobb</h1>
				
				<p>Inför sommaren 2019 är vi klara med alla ansökningar. Du är välkommen att lämna din ansökning för extrajobb eller säsongen 2020.</p>
				
				<p>Här nedan ser du aktuella tjänster. Du som är boende på Gotland eller har tillgång till eget boende priorieteras högre.</p>

				<ul>
					<li>Arbetsledare</li>
					<li>Bar/restaurang-personal</li>
					<li>Runner</li>
					<li>Receptionist/butikssäljare/bokning</li>
					<li>Aktiviteter och events</li>
					<li>Städ</li>
				</ul>

				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="https://docs.google.com/forms/d/e/1FAIpQLSfuJzSqdImXaod1iCokR3Uo1KJKgJi0jkp5DfG5jm-KQI1Nfw/viewform" target="_blank">Ansök nu</a></div>
			</div>

			<div class="text en">
				<h1>APPLY FOR WORK</h1>
				
				<p>We're currently done for ‘The Summer of 2019’. You're welcome to submit your application for extra jobs or for the season of 2020.</p>

				<ul>
					<li>Work leader</li>
					<li>Bar/restaurant attendant</li>
					<li>Runner</li>
					<li>Receptionist/Sales/Booking</li>
					<li>Event and Activities</li>
					<li>Housekeeping</li>
				</ul>

				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="https://docs.google.com/forms/d/e/1FAIpQLSfuJzSqdImXaod1iCokR3Uo1KJKgJi0jkp5DfG5jm-KQI1Nfw/viewform" target="_blank">Apply now</a></div>
			</div>
		</div>
		<div class="divider">
			<div class="layer1"> </div>
		</div>
		<div class="infobox reverse">
			<div class="picture">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/karta.png">
			</div>

			<div class="text">
				<style>
				ul.contact {
					margin: 0;
					padding: 0;
				}
				.contact li {
					background-repeat: no-repeat;
					padding-left: 35px;
					list-style: none;
				}
				</style>
				<h1 class="sv">Kontaktuppgifter</h1>
				<h1 class="en">Contacts</h1>
				<ul class="contact">
					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/location.svg');"><p>Eskelhem Toftavägen 374<br>
					622 66 Gotlands Tofta<br>
					<svg class="go" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="https://goo.gl/maps/NaWWQL8UwrQ2" target="_blank"><span class="sv">Karta på</span><span class="en">Map on</span> Google Maps</a></p></li>

					<li style="background-image: uxxrl('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/phone.svg');"><p><span class="sv">0498-29 79 55</span><span class="en">+46-(0)498-29 79 55</span><br>
					<a href="mailto:info@surflogiet.se">info@surflogiet.se</a></p></li>

					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/time.svg');"><h3 class="sv">Öppettider</h3><h3 class="en">Business hours</h3>
						<p class="sv">Centret: 10.00 - 20.00<br>
						Baren: 12.00 - 21.00</p>
						<p class="en">Centret: 10 am - 8 PM<br>
						Baren: noon - 9 PM</p>
					</li>

					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/map.svg');" class="sv"><h3>Vägbeskrivning</h3>
					<p>Surfogiet hittar du längs väg 140, 15 minuter söder om Visby. Följ vägen mot Klintehamn och sväng av i Tofta när naturen öppnar upp sig och du ser havet.</p></li>
				
					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bus.svg');" class="sv">Busslinje 10 avgår från Visby bussterminal mot Burgsvik/Klintehamn.</li>

					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/map.svg');" class="en"><h3>Direction</h3>
					<p>Surfogiet can be found along road 140. 15mins South of Visby. Follow the road towards Klintehamn and turn off in Tofta when nature opens up and you see the sea.</p></li>
				
					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bus.svg');" class="en">Bus line 10. Departs from Visby Bus Terminal, towards Burgsvik / Klintehamn.</li>

					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/heart.svg');"><p><a href="https://instagram.com/surflogiet_gotland/" target="_blank">Instagram</a><br>
					<a href="https://facebook.com/surflogietgotland" target="_blank">Facebook</a></p></li>

				</ul>
			</div>
		</div>

		<div class="divider">
			<div class="layer1"> </div>
		</div>
		
		<div class="feet"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.png"></div>
	</div>

<div id="sidebar">
	<div class="sidebar-close">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
	</div>

	<a href="#"><img class="logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.png"></a>

	<ul>
		<li style="background-image: url(<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logiet.png);"><a href="#logiet">Logiet</a></li>
		<li style="background-image: url(<?php echo get_bloginfo('stylesheet_directory'); ?>/images/baren.png);"><a href="#baren">Baren</a></li>
		<li style="background-image: url(<?php echo get_bloginfo('stylesheet_directory'); ?>/images/centret.png);"><a href="#centret">Centret</a></li>
		<li style="background-image: url(<?php echo get_bloginfo('stylesheet_directory'); ?>/images/eventet.png);"><a href="#eventet">Eventet</a></li>
		<li style="background-image: url(<?php echo get_bloginfo('stylesheet_directory'); ?>/images/kontakt.png);"><a href="#kontakt" class="sv">Kontakt</a><a href="#kontakt" class="en">Contacts</a></li>
	</ul>
</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
	var userLang = navigator.language || navigator.userLanguage;
	userLang = userLang.split('-')[0];

	if(userLang == 'sv') {
		$(".userlang").removeClass('hide');
	}

	$(".switch-language").click(function() {
		$("body").toggleClass("lang-sv lang-en");
	});

	$(".sidebar-open").click(function() {
		$("#sidebar").toggle();
	});
	$(".sidebar-close").click(function() {
		$("#sidebar").hide();
	});
	$("#sidebar a").click(function() {
		$("#sidebar").hide();
	});
	$(document).keydown(function(e){
		if(e.keyCode === 27)
			$("#sidebar").hide();
	});

	// ready for actions
	$("#topmenu").show();

	$(".form form").submit(function(e){
		e.preventDefault(e);
		var $this = $(this);
		var data = {
			company: $this.find("#company").val(),
			name: $this.find("#name").val(),
			email: $this.find("#email").val(),
			phone: $this.find("#phone").val(),
			message: $this.find(".message:visible").val(),
			action: 'sendEventEmail',
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
<style>
	/* hidden content */
	#content,
	.skip-to-content {
		display: block;
	}

	#topmenu .sidebar-open {
		padding: 4px;
		cursor: e-resize;
	}
	#topmenu .switch-language {
		position: absolute;
		top: 0;
		right: 0;
		padding: 4px;
		cursor: pointer;
	}
	.switch-language svg {
		vertical-align: middle;
	}
	#sidebar {
		z-index: 999;
		position: fixed;
		top: 0;
		width: 150px;
		height: 100%;
		background-color: #F9F9F9;
		min-width: 130px;
		max-width: 80%;
		box-shadow: 3px 0px 20px 0px rgba(0,0,0,0.3);
	}
	#sidebar .sidebar-close {
		position: absolute;
		right: 0;
		cursor: w-resize;
		padding: 4px;
	}
	#sidebar .logo {
		display: block;
		max-width: 100%;
		margin: 0 auto;
		width: 80%;
		padding: 30px 10px;
		border-bottom: 1px solid black;
	}
	#sidebar ul {
		margin-top: 30px;
		padding-left: 15px;
	}
	#sidebar li {
		list-style: none;
		margin: 1em 0;
		background-repeat: no-repeat;
		background-size: contain;
		/* background-position-x: left; */
		margin-left: 0em;
		line-height: 1.8em;
	}
	#sidebar li a {
		color: black;
		text-decoration: none;
		padding: 0.75em 0 0.5em 4em;
		margin-left: -1em;
	}
</style>

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<?php wp_footer() ?>
</body>
</html>