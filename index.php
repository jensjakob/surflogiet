
<!DOCTYPE html>
<html lang="sv">
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
		.lang-sv .en {
			display: none;
		}
		.lang-en .sv {
			display: none;
		}
		#topmenu {
			display: none;
			position: fixed;
			width: 100%;
			z-index: 100;
		}
		/* @media (max-width: 766px) {
			#topmenu {
				background: white;
				filter: opacity(0.9);
			}
		} */

		#sidebar,
		#content,
		.skip-to-content {
			display: none;
		}
		/* header {
			display: flex;
			height: 101%;
			width: 100%;
			background-color: #DDC79C;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			justify-content: space-between;
		}
		header .top {

			flex-grow: 1;
		}
		header .logo {
			color: white;
			display: block;
			width: 280px;
			max-width: 80%;
		}
		header .skip-to-content {
			
			flex-grow: 1;
			display: flex;
			align-items: flex-end;
			align-content: space-around;
			width: 50%;
			min-width: 100px;
		}
		.skip-to-content img {
			position: relative;
			animation: jump 2s infinite;
			bottom: 50%;
			margin: 0 auto;
		} */

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

	</style>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body class="lang-sv">
	<div id="topmenu">
		<div class="sidebar-open">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
		</div>
		<div class="switch-language">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
		</div>
	</div>
	<style>
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
		min-height: 100%;
		min-width: 100%;
		filter: blur(8px);
	}
	header .layer2 {
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
	header .layer3 {
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
		animation: jump 2s infinite;
		top: 0;
		margin: 0 auto;
	}
	@keyframes jump {
		0% {
			top: 0;
		}
		50% {
			top: 70%;
		}
		100% {
			top: 0;
		}
	}
	</style>
	<header>
		<div class="layers">
			<div class="layer1">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/header.jpg' ), 'full'); ?>
			</div>
			<div class="layer2">
				<img class="logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo_white.png" alt="SURFLOGIET">
			</div>
			<div class="layer3">
				<a class="skip-to-content" href="#content">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" fill="white"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				</a>
			</div>
		</div>
	</header>
	<div id="content">
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
				<p class="caption">Bildtext</p>
			</div>
			<div class="text">
				<h1>Logiet</h1>
				
				<p>Det är vågornas brus du somnar till om natten. Utvilad och hungrig på nya äventyr vaknar du vid stranden i gryningen.</p>

				<p>Efter morgonpromenaden längs Toftas vackra sandstrand väntar frukostkorgen vid tältet och kitekursen börjar om en timme. Det kommer bli en bra dag!</p>
				
				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka">Boka nu</a></div>
				
			</div>
		</div>
		<div class="infocards">
			<div class="card">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/suite.jpg' ), 'thumb'); ?>
				<h2>Suite</h2>
				<p>Surflogiets två sviter är vårt absolut bekvämaste boende för dig och din partner nu när semestern har börjat. Ni sover gott i de härliga sängarna som Hästens byggt åt oss av rena naturmaterial.</p>
				<p>3495 kr/natt</p>
				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka">Boka</a></div>
			</div>
			<div class="card">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/double.jpg' ), 'thumb'); ?>
				<h2>Double</h2>
				<p>Ur minibaren plockar du fram välkomstdrinken, skålar och känner den euforiska känslan av lugn och ledighet. Tankarna på inkorgen rinner av dig och för en stund önskar du nästan att det inte finns någon mottagning på mobilen.</p>
				<p>2495 kr/natt</p>
				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka">Boka</a></div>
			</div>
			<div class="card">
				<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/lodger.jpg' ), 'thumb'); ?>
				<h2>Lodger</h2>
				<p>4 bäddade sängar när solen börjar röra sig ner mot horisonten. Precis innan barnen somnar ser du genom tältöppningen hur det röda klotet försvinner ner i havet. Utanför sitter din favorit nedsjunken i en av de sköna stolarna omlindad av ullfiltar. </p>
				<p>4995 kr/natt</p>
				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka">Boka</a></div>
			</div>
		</div>
		<div class="text">
			<p>Vi debiterar 30% av totalbeloppet i förskott. Resterande betalas i samband med utcheckningen.<br>
			<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="https://drive.google.com/open?id=19Y96aqkkKCYUjtr1_oceI-8igjb-1AfA" target="_blank">Fullständiga bokningsvillkor</a></div>
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
				<p class="caption">Bildtext</p>
			</div>
			<div class="text">
				<h1>Baren</h1>
				
				<p>Ta av dig skorna! Känn sandkornen kittla dina fötter. Solen värmer dig i ansiktet samtidigt som den tackar för sig och sakta sjunker mot horisonten.</p>

				<p>Skratt och leenden blandas i sköna toner från högtalarna. Den enkla, goda & ekologiska maten i kombination med lokala drycker avnjuts bäst i sällskap med de du älskar mest.</p>

				<p>Låt barnen springa själva bort till lekområdet eller använda naturens egna sandlåda.</p>

				<p>1. Ingen möjlighet till bordsreservation<br>
				2. Vid sämre väder öppnar vi tältet.</p>
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
				
				<p>Välkommen till centret. Det är hit du vänder dig när du vill boka aktiviteter eller checka in i tälthotellet. Här kan du också hyra brädor och kajaker. Öppet mellan 10.00 - 21.00.</p>
			</div>
			<div class="infocards two-col">
				<div class="card">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/sup.jpg' ), 'medium'); ?>
					<h2>Stand up paddle guidad tur</h2>
					<p>Vi tar dig med på ett roligt vattenäventyr längs Toftas vackra sandstrand. Här lär du dig knepen som får dig upp och i väg på brädan. Halvvägs gör vi ett strandhugg och fikar tillsammans i den Gotländska miljön. Turen tar ungefär 3 timmar.</p>
					<p>DET HÄR INGÅR: 1x Bräda 1x Paddel 1x Våtdräkt 1x Flytväst Fika med Ekologiskt Kaffe/the, bullar från Strandbageriet</p>
					<p>1250 kr</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet">Boka</a></div>
				</div>
				<div class="card">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/sup-yoga.jpg' ), 'medium'); ?>
					<h2>STAND UP PADDLE YOGA</h2>
					<p>Sätt dina balansmuskler på prov och följ med oss ut i vattnet. Yoga på en surfbräda är något alldeles speciellt och måste upplevas. Yogan tar ungefär 90 minuter.</p>
					<p>DET HÄR INGÅR: 1 x Bräda 1 x Paddel 1 x Våtdräkt 1x Flytväst Yogalärare i grupp</p>
					<p>TIPS! Använd dina kläder som du normalt har vid yoga eller badkläder om du känner dig osäker på brädan :)</p>
					<p>? kr</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet">Boka</a></div>
				</div>
				<div class="card">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/kajak.jpg' ), 'medium'); ?>
					<h2>KAJAKUTFLYKT MED PRIVAT GUIDE</h2>
					<p>Vi tar dig med på ett roligt vattenäventyr längs Toftas vackra sandstrand. Här lär du dig knepen som får dig upp och i väg i kayaken. Halvvägs gör vi ett strandhugg och fikar tillsammans i den Gotländska miljön. Turen tar ungefär 3 timmar.</p>
					<p>DET HÄR INGÅR: 1 x Kajak 1 x Paddel 1 x Våtdräkt 1x Flytväst Fika med Ekologiskt Kaffe/the, bullar från Strandbageriet</p>
					<p>1250 kr</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet">Boka</a></div>
				</div>
				<div class="card">
					<?php echo wp_get_attachment_image(attachment_url_to_postid( content_url() . '/uploads/kids-surf.jpg' ), 'medium'); ?>
					<h2>KIDS SUMMER SURF</h2>
					<p>Veckan då barnen får testa vattenaktiviteter och känner sig som riktiga proffssurfare. Dag för dag jobbar vi oss närmare diplom och t-shirt som delas ut sista dagen. Utifrån dagens förutsättningar testar vi olika vatten & landsporter så som surfing, paddla S.U.P, skateboard eller flyga en träningskite.</p>
					<p>tisdag - torsdag - lördag START: 09.00 TIDSÅTGÅNG: 1,5 timme ÅLDER: 6-12 år</p>
					<p>995 kr</p>
					<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="/boka-aktivitet">Boka</a></div>
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
				<p class="caption">Bildtext</p>
			</div>
			<div class="text">
				<h1>Eventet</h1>
				
				<p>Vi vet hur viktigt miljöombytet är för att kreativiteten skall börja flöda. Lämna vardagen och ta med dig kollegorna till stället ni länge kommer att prata om.</p>

				<p>Ett konferensrum närmare havet än här, blir svårt att hitta. Kanske är det just havet som har den största påverkan för ert lyckade resultat.</p>
				
				<p>Varva arbetet med ett yogapass eller en tur på S.U.P-brädan längs med Toftastranden. Dagen summeras i bastun med vidunderlig utsikt över Östersjön och när hettan blir för påtaglig, är språnget ner till vattnet knappa 30 meter.</p>
			</div>
		</div>
		<div class="form">
			<h2>Intresseanmälan</h2>
			<p>Mattias kommer ta hand om ditt ärende. Du kan nå Mattias direkt via telefon och mail; <a href="mailto:mattias@surflogiet.com">mattias@surflogiet.com</a></p>

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
.form #phone {
display: block;
width: 50%;
}
</style>
			<div class="cols">
				<div class="col1">
					<label for="company">Företag:</label>
					<input id="company" name="company" type="text">
					
					<label for="name">Kontaktperson:</label>
					<input id="name" name="name" type="text">

					<label for="email">E-post:</label>
					<input id="email" name="email" type="email">
					
					<label for="phone">Telefon:</label>
					<input id="phone" name="phone" type="tel">
				</div>
				<div class="col2">
					<label for="message">Meddelande:</label>
					<textarea id="message" name="message" rows="10">Hej Surflogiet.
Vi är ett företag som älskar ert koncept. Kan ni hjälpa oss att ge förslag på mat, boende och aktivitet för oss?

Vi blir ungefär X personer.

Tack!</textarea>
					<input class="button" type="submit" value="Skicka">
				</div>
			</div>
			</form>
		</div>

		<div id="kontakt" class="divider">
			<div class="layer1"> </div>
			<div class="layer2">
				<div class="circle"> </div>
			</div>
			<div class="layer3"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/kontakt.png"></div>
		</div>
		<div class="infobox" id="kontakt">
			<div class="picture">
				<video width="100%" preload="metadata" controls="controls"><source type="video/mp4" src="<?php echo content_url() ?>/uploads/surflogiet_rekrytering.mp4" /></video>
			</div>

			<div class="text">
				<h1>Sök jobb hos oss</h1>
				<p>Nu vi rekryterar inför sommaren 2019. Här nedan ser du vilka tjänster som finns tillgängliga samt under vilken period. Du som är boende på Gotland eller har tillgång till eget boende priorieteras högre.</p>

				<ul>
					<li>Arbetsledare</li>
					<li>Kafébiträde</li>
					<li>Runner</li>
					<li>Receptionist/butikssäljare/bokning</li>
					<li>Aktiviteter och events</li>
					<li>Städ</li>
				</ul>

				<div class="go"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="https://docs.google.com/forms/d/e/1FAIpQLSfuJzSqdImXaod1iCokR3Uo1KJKgJi0jkp5DfG5jm-KQI1Nfw/viewform" target="_blank">Ansök nu</a></div>
			</div>
		</div>
		<div id="kontakt" class="divider">
			<div class="layer1"> </div>
		</div>
		<dic class="infobox reverse">
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
				<h1>Kontaktuppgifter</h1>
				<ul class="contact">
					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/location.svg');"><p>Eskelhem Toftavägen 374<br>
					622 66 Gotlands Tofta<br>
					<svg class="go" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg><a href="https://goo.gl/maps/NaWWQL8UwrQ2" target="_blank">Karta på Google Maps</a></p></li>

					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/phone.svg');"><p>0498-29 79 55<br>
					<a href="mailto:info@surflogiet.se">info@surflogiet.se</a></p></li>

					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/time.svg');"><h3>Öppettider</h3>
					<p>Sänsongsstängt. Öppnar 1 juni.<br>
					Centret öppet 10.00 - 20.00<br>
					Kafét 11.30 - 22.00</p></li>

					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/map.svg');"><h3>Vägbeskrivning</h3>
					<p>Surfogiet hittar du längs väg 140, 15 minuter söder om Visby. Följ vägen mot Klintehamn och sväng av i Tofta när naturen öppnar upp sig och du ser havet.</p></li>
				
					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bus.svg');">Busslinje 10 avgår från Visby bussterminal mot Burgsvik/Klintehamn.</li>

					<li style="background-image: url('<?php echo get_bloginfo('stylesheet_directory'); ?>/images/heart.svg');"><p><a href="https://instagram.com/surflogiet_gotland/" target="_blank">Instagram</a><br>
					<a href="https://facebook.com/surflogietgotland" target="_blank">Facebook</a></p></li>

				</ul>
			</div>
		</dic>

		<div id="kontakt" class="divider">
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
	<li style="background-image: url(<?php echo get_bloginfo('stylesheet_directory'); ?>/images/kontakt.png);"><a href="#kontakt">Kontakt</a></li>
</ul>

</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
	$(".switch-language").click(function() {
		$("body").toggleClass("lang-sv lang-en");
	});
	$(".skip-to-content").click(function() {
		// event.preventDefault();
		// $([document.documentElement, document.body]).animate({
		// 	scrollTop: $("#content").offset().top
		// }, 2000);
	});
	$(".sidebar-open").click(function() {
		$("#sidebar").show();
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
	message: $this.find("#message").val(),
	action: 'sendEventEmail',
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
		width: 250px;
		height: 100%;
		background-color: #F9F9F9;
		min-width: 200px;
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
		padding: 0.75em 3em 0.5em 4em;
		margin-left: -1em;
	}

	/* load later */
	#content {
		max-width: 720px;
		padding-top: 20px;
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
</style>

<?php wp_footer() ?>
</body>
</html>