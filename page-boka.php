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
				<h2>Boka logi</h2>
				<script async data-form-id="5aeac633b6f28" data-lang="sv" src="https://secured.sirvoy.com/widget/sirvoy.js"></script>
			</div>
		</div>

	<?php wp_footer() ?>
	</body>
</html>