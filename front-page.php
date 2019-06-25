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

					<p>Här hittar du ingen meny, men du kan lita på att vi har något för barnen, vegetarianer, veganer, gluten och laktosintolleranta. Men, strandbordet då? Går det att boka för mig och mina vänner?  Prata med Mattias så kanske han löser det! <a href="mailto:mattias@surflogiet.se">mattias@surflogiet.se</a><br>
					Vi ses!</p>

				</div>

				<div class="en">

					<p>Remove your shoes! Feel the grains of sand beneath your feet. The sun warms your face as it slowly says farewell and edges towards the ocean horizon.

					<p>Laughter and smiles blend with the beautiful moody tunes from the speakers. The simple, delicious and organic food in perfect combination with local drinks are best enjoyed in company with those you love the most.</p>

					<p>Let the kids run away to the playground or play with natures own sandbox.</p>

					<p>You won’t find a menu here, but you can trust us that you will find something for the kids, the vegetarians, the vegans, and the gluten or lactose intolerant. But, what about that amazing table right on the beach? Can I book it for me and my friends? Speak with Mattias and maybe he’ll hook you up. <a href="mailto:mattias@surflogiet.se">mattias@surflogiet.se</a></p>
					
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
				
				<p class="sv">Välkommen till centret. Det är hit du vänder dig när du vill boka aktiviteter eller checka in i tälthotellet. Här kan du också hyra brädor och kajaker. Öppet mellan 10.00 - 21.00.</p>

				<p class="en">Welcome to The Centre, where you excitedly come to check into the Tent Hotel. Or, to book, along with your favourite Summer activities. Here you can also rent kayaks & boards (wave, SUP, skim or body). Complementary slacklines, indo & skate boards, volleyball, kube, backgammon.<br>
				Open 10:00 - 21:00</p>

			</div>
			<div class="infocards two-col">
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/sup.jpg' ), 'medium'); ?>
					<h2>Stand up paddle guidad tur</h2>
					<p>Vi tar dig med på ett roligt vattenäventyr längs Toftas vackra sandstrand. Här lär du dig knepen som får dig upp och i väg på brädan. Halvvägs gör vi ett strandhugg och fikar tillsammans i den Gotländska miljön. Turen tar ungefär 3 timmar.</p>
					<p>DET HÄR INGÅR: 1x Bräda 1x Paddel 1x Våtdräkt 1x Flytväst Fika med Ekologiskt Kaffe/the, bullar från Strandbageriet</p>
					<p>550 kr</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=sup">Boka</a></div>
				</div>
				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/sup.jpg' ), 'medium'); ?>
					<h2>GUIDED STAND UP PADDLEBOARD TOUR</h2>
					<p>We take you on a fun-filled water adventure along Tofta’s beautiful beach. Here you will learn all the tips & tricks that will get you up on the board. Halfway we’ll go ashore and ‘Fika’ picnic together in the Gotlandic nature. Approx 3 hours.</p>
					<p>INCLUDES: 1x board 1x paddle 1x wetsuit 1x life jacket. Organic ‘Fika’ with coffee/tea and something sweet from our Kafét.</p>
					<p>550 SEK</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=sup&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/sup-yoga.jpg' ), 'medium'); ?>
					<h2>STAND UP PADDLE YOGA</h2>
					<p>Sätt dina balansmuskler på prov och följ med oss ut i vattnet. Yoga på en surfbräda är något alldeles speciellt och måste upplevas. Yogan tar ungefär 90 minuter.</p>
					<p>DET HÄR INGÅR: 1 x Bräda 1 x Paddel 1 x Våtdräkt 1x Flytväst Yogalärare i grupp</p>
					<p>TIPS! Använd dina kläder som du normalt har vid yoga eller badkläder om du känner dig osäker på brädan :)</p>
					<p>190 kr</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=sup-yoga">Boka</a></div>
				</div>
				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/sup-yoga.jpg' ), 'medium'); ?>
					<h2>STAND UP PADDLEBOARD YOGA</h2>
					<p>Put your core muscles and balance to the test and follow us out onto the water. Yoga on a SUP is something very special. It is so fun and can be experienced by all at any level (tied to float to not drift). Approx 90 minutes.</p>
					<p>INCLUDES: 1x SUPboard 1x paddle 1x wetsuit 1x life vest(optional) & SUP Yoga instructor.</p>
					<p>TIP! Wear clothes normal for practicing Yoga, or swimwear as it’s fun & nice to get wet & tan!</p>
					<p>190 SEK</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=sup-yoga&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/kajak.jpg' ), 'medium'); ?>
					<h2>KAJAKUTFLYKT MED GUIDE</h2>
					<p>Vi tar dig med på ett roligt vattenäventyr längs Toftas vackra sandstrand. Här lär du dig knepen som får dig upp och i väg i kayaken. Halvvägs gör vi ett strandhugg och fikar tillsammans i den Gotländska miljön. Turen tar ungefär 3 timmar.</p>
					<p>DET HÄR INGÅR: 1 x Kajak 1 x Paddel 1 x Våtdräkt 1x Flytväst Fika med Ekologiskt Kaffe/the, bullar från Strandbageriet</p>
					<p>550 kr</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=kajak">Boka</a></div>
				</div>
				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/kajak.jpg' ), 'medium'); ?>
					<h2>KAYAKING TOUR WITH GUIDE</h2>
					<p>We take you on a fun water adventure along Tofta’s beautiful beach. Here you will learn all the tips & tricks that will get you up and away on the kayak. Halfway well go ashore and have a Fika Picnic together in the astounding Gotlandic nature. Approx 3 hours.</p>
					<p>INCLUDES: 1x board 1x paddle 1x wetsuit 1x life jacket. Organic Fika picnic with coffee/tea and something sweet from our Kafét.</p>
					<p>550 SEK</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=kajak&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/kids-surf.jpg' ), 'medium'); ?>
					<h2>KIDS SUMMER SURF</h2>
					<p>Veckan då barnen får testa vattenaktiviteter och känner sig som riktiga proffssurfare. Dag för dag jobbar vi oss närmare diplom och t-shirt som delas ut sista dagen. Utifrån dagens förutsättningar testar vi olika vatten & landsporter så som surfing, paddla S.U.P, skateboard eller flyga en träningskite.</p>
					<p>tisdag - torsdag - lördag START: 09.00 TIDSÅTGÅNG: 1,5 timme ÅLDER: 6-12 år</p>
					<p>650 kr</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=kids-surf&lang=sv">Boka</a></div>
				</div>
				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/kids-surf.jpg' ), 'medium'); ?>
					<h2>KIDS SUMMER SURF</h2>
					<p>A week for the children get to try all our water activities with our instructor to feel like real professional surfers. Day by day we work closer to the Diploma and proudly worn T-shirt that is handed out on the last day. Based on the weather conditions of the day, we try out different water & land sports like surfing, S.U.P, skateboarding, flying a training kite and more..</p>
					<p>START: 09.00.  Tuesday - Thursday - Saturday.  (Duration 1.5 hrs)</p>
					<p>650 SEK</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet?activity=kids-surf&lang=en">Book now</a></div>
				</div>
				<div class="card sv">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/massage.jpg' ), 'medium'); ?>
					<h2>Asiatisk Yoga massage</h2>
					<p>Asiatisk Yogamassage går ut på att öppna upp kroppens energiflöde samt uppnå balans genom att arbeta med kroppens energilinjer och stretcha ut muskler och leder.</p>
					<p>Med hjälp av fingrar, händer, fötter, knän och armbågar arbetar sig massören igenom muskler energilinjer och akupressurpunkter.</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/massage?lang=sv">Mer info och bokning</a></div>
				</div>
				<div class="card en">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/massage.jpg' ), 'medium'); ?>
					<h2>Asian yoga massage</h2>
					<p>Asian yoga massage is all about opening up the energy flow in the body. We also achieve a balance by working with the energy lines of the body and stretch out muscles and joints.</p>
					<p>With our fingers, hands, feet, knees and elbows we work through the muscles, energy lines and acupressure points.</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/massage">More info and booking</a></div>
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
