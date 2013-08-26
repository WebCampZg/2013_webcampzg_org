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
               <?php include 'components/navigation.php'; ?>

				<section class="intro">
					<h2>Tehnološka konferencija namjenjena web developerima</h2>
					<p>Subota 26/10/2013 Hrvatska Gospodarska Komora Nova cesta 7, Zagreb</p>
				</section>

			</div>

		</div>

	</header>

	<div id="content_wrap">

		<div id="top_content_mask">
			<?php include 'components/newsletter.php'; ?>

			<div class="news_block col_3_grid">
				<div class="inner_wrap cf">

					<div class="inner_wrap_02">

						<div class="col">

							<article>
								<strong>27/08/2013</strong>
								<h2><a href="/postani-predavac-na-webcampu-zagreb-2013/" title="Postani predavač na WebCampu Zagreb 2013!">Postani predavač na WebCampu Zagreb 2013!</a></h2>
								<p>Veliko nam je zadovoljstvo pozvati te na WebCamp Zagreb 2013, jednodnevnu konferenciju posvećenu web programerima, koja će se održati 26. listopada 2013. u Zagrebu. No ovo nije običan poziv – pozivamo te da nam pomogneš u realizaciji konferencije vlastitim predavanjem! <a href="/postani-predavac-na-webcampu-zagreb-2013/">opširnije</a></p>
							</article>

						</div>
						<div class="col">

							<article>
								<strong>06/06/2013</strong>
								<h2><a href="/krecemo-s-pripremama-za-webcamp-zagreb-2013/">Krećemo s pripremama za WebCamp Zagreb 2013</a></h2>
								<p>Potaknuti uspjehom prošlogodišnje konferencije WebCamp Zagreb, koja je okupila više od 230 posjetitelja, odlučili smo i ove godine nastaviti s provjerenim konceptom. Posebnost konferencije WebCamp leži upravo u činjenici da ju je pokrenula zajednica stoga i ove godine očekujemo snažnu potporu web korisničkih grupa kako bismo vam mogli ponuditi još kvalitetniji program. <a href="novost_detaljno.html">opširnije</a></p>
							</article>

						</div>
						<div class="col">

							<article>
								<strong>26/12/2012</strong>
								<h2><a href="http://2012.webcampzg.org/video-snimke-predavanja-webcamp-zagreb-2012/">Video snimke predavanja WebCamp Zagreb 2012</a></h2>
								<p>Na stranicama predavanja se nalaze video snimke svih predavanja sa nedavno održanoga WebCampa 2012.  Puno hvala ekipi Kluba Studenata Elektrotehnike (KSET) na snimanju predavanja i obradi videa. Radi lakšega snalaženja koja ste predavanja propustili lista je objavljena u obliku rasporeda. <a href="http://2012.webcampzg.org/video-snimke-predavanja-webcamp-zagreb-2012/">opširnije</a></p>
							</article>

						</div>

					</div>
<?php if (0) {?>
					<div class="show_more">
						<a href="#" class="down-icon">Prikaži još vijesti</a>
					</div>
<?php } ?>
				</div>
			</div>

		</div>
        <?php //include 'components/twitter.php'; ?>
        <?php //include 'components/speaker.php'; ?>
        <?php //include 'components/schedule.php'; ?>
        <?php //include 'components/sponsors.php'; ?>
        <?php include 'components/organizers.php'; ?>
        <?php include 'components/social.php'; ?>
        <?php include 'components/footer.php';?>

	<script>
		new wczg.main();
	</script>

</body>
</html>
