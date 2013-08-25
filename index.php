<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no" name="viewport">

	<title>WebCamp Zagreb | Tehnološka konferencija namijenjena web developerima</title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400' rel='stylesheet' type='text/css' />

	<link href="font/css/webcampzg.css" rel="stylesheet" />
	<link href="css/core.css" rel="stylesheet" />

	<script src="js/jquery.js"></script>
	<script src="js/swipe.js"></script>
	<script src="js/core.js"></script>

	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

</head>

<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<header id="page_head">

		<div class="graphics_wrap">

			<div class="inner_wrap cf">

				<h1><a href="http://2013.webcampzg.org/" title="WebCamp Zagreb"><strong>Webcamp</strong> Zagreb</a></h1>

                <?php include 'components/aside_social.php'; ?>

				<nav>
					<ul>
						<li class="active"><a href="index.html">Početak</a></li>
						<li><a href="novosti.html">Novosti</a></li>
						<li><a href="predavaci.html">Predavači</a></li>
						<li><a href="raspored.html">Raspored</a></li>
						<li><a href="info.html">Info</a></li>
					</ul>
				</nav>

				<section class="intro">
					<h2>Tehnološka konferencija namjenjena web developerima</h2>
					<p>Subota 21/04/2013 Hrvatska Gospodarska Komora Nova cesta 7, Zagreb</p>
				</section>

			</div>

		</div>

	</header>

	<div id="content_wrap">

		<div id="top_content_mask">

			<section id="newsletter_sub">
				<div class="inner_wrap cf">
					<p>Ostani u toku. Pretplati se na newsletter.</p>
					<form action="" method="">
						<fieldset>
							<input class="text" type="email" name="" placeholder="Upiši svoju e-mail adresu" />
							<button class="submit right-circle-icon" type="submit"><span>pošalji</span></button>
						</fieldset>
					</form>
				</div>
			</section>

			<div class="news_block col_3_grid">
				<div class="inner_wrap cf">

					<div class="inner_wrap_02">

						<div class="col">

							<article>
								<strong>15/08/2013</strong>
								<h2><a href="novost_detaljno.html">Krećemo s pripremama za WebCamp Zagreb 2013</a></h2>
								<p>Potaknuti uspjehom prošlogodišnje konferencije WebCamp Zagreb, koja je okupila više od 230 posjetitelja, odlučili smo i ove godine ... <a href="novost_detaljno.html">opširnije</a></p>
							</article>

						</div>
						<div class="col">

							<article>
								<strong>15/08/2013</strong>
								<h2><a href="novost_detaljno.html">Krećemo s pripremama za WebCamp Zagreb 2013</a></h2>
								<p>Potaknuti uspjehom prošlogodišnje konferencije WebCamp Zagreb, koja je okupila više od 230 posjetitelja, odlučili smo i ove godine ... <a href="novost_detaljno.html">opširnije</a></p>
							</article>

						</div>
						<div class="col">

							<article>
								<strong>15/08/2013</strong>
								<h2><a href="novost_detaljno.html">Krećemo s pripremama za WebCamp Zagreb 2013</a></h2>
								<p>Potaknuti uspjehom prošlogodišnje konferencije WebCamp Zagreb, koja je okupila više od 230 posjetitelja, odlučili smo i ove godine ... <a href="novost_detaljno.html">opširnije</a></p>
							</article>

						</div>

					</div>

					<div class="show_more">
						<a href="#" class="down-icon">Prikaži još vijesti</a>
					</div>

				</div>
			</div>

		</div>
        <?php include 'components/twitter.php'; ?>
        <?php include 'components/speaker.php'; ?>
        <?php include 'components/schedule.php'; ?>
        <?php include 'components/sponsors.php'; ?>
        <?php include 'components/social.php'; ?>
        <?php include 'components/footer.php';?>

	<script>
		new wczg.main();
	</script>

</body>
</html>
