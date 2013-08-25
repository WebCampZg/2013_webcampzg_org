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
						<li><a href="index.html">Početak</a></li>
						<li class="active"><a href="novosti.html">Novosti</a></li>
						<li><a href="predavaci.html">Predavači</a></li>
						<li><a href="raspored.html">Raspored</a></li>
						<li><a href="info.html">Info</a></li>
					</ul>
				</nav>

			</div>

		</div>

	</header>

	<div id="content_wrap">
		
		<div id="top_content_mask">

			<div class="news_block">
				<div class="inner_wrap cf">						

					<article>
						<strong>15/08/2013</strong>
						<h2>Krećemo s pripremama za WebCamp Zagreb 2013</h2>

						<div class="detail_view">

							<aside class="social cf">
								<div class="fb">
									<div class="fb-like" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
								</div>
								<div class="tw">
									<a href="https://twitter.com/share" class="twitter-share-button" data-via="webcampzg">Tweet</a>
								</div>
							</aside>

							<p>Potaknuti uspjehom prošlogodišnje konferencije WebCamp Zagreb, koja je okupila više od 230 posjetitelja, odlučili smo i ove godine nastaviti s provjerenim konceptom. Posebnost konferencije WebCamp leži upravo u činjenici da ju je pokrenula zajednica stoga i ove godine očekujemo snažnu potporu web korisničkih grupa kako bismo vam mogli ponuditi još kvalitetniji program.</p>
							<p>Organizacijskom timu se, uz developerske grupe Code@Six, FrontmenHr, FutureDEV, HUJAK, Python Hrvatska i ZgPHP, ove godine pridružuju Javascript Zagreb i Girl Geek Dinners Hrvatska, a na jesen se nadamo ponovno okupiti najbolje ljude iz Hrvatske i regije na jednom mjestu te potaknuti kvalitetniju razmjenu iskustva i povezivanje IT zajednice koja dijeli slične interese.</p>
							<p><strong>Datum</strong>: subota, 26. listopada 2013.<br />Lokacija: Hrvatska gospodarska komora, Nova cesta 7, Zagreb.</p>
							<p>U suradnji s <a href="#">partnerima</a> i sponzorima radimo na tome da ulaz na konferenciju i ove godine bude 0 kn uz prethodnu rezervaciju, a fokus konferencije će i dalje biti na predstavljanju iskustva rada s raznim tehnologijama, metodologijom rada ili zanimljivim rješenjima nekog problema.</p>
							<ul>
								<li>link 1</li>
								<li>link 2</li>
								<li>link 3</li>
							</ul>
							<p>Želite li među prvima dobiti informacije o dostupnosti ulaznica i sadržaju konferencije? Ostavite nam svoju e-mail adresu.</p>
							<p>Zainteresirani ste predavati na WebCampu? Javite nam se na vrijeme i ostavite svoje kontakt podatke kako bismo vas obavijestili kad otvorimo poziv predavačima i predavačicama.</p>
							<ol>
								<li>link 1</li>
								<li>link 2</li>
								<li>link 3</li>
							</ol>
							<p>Želite li među prvima dobiti informacije o dostupnosti ulaznica i sadržaju konferencije? Ostavite nam svoju e-mail adresu.</p>
							<p>Zainteresirani ste predavati na WebCampu? Javite nam se na vrijeme i ostavite svoje kontakt podatke kako bismo vas obavijestili kad otvorimo poziv predavačima i predavačicama.</p>
							<p>Želite li među prvima dobiti informacije o dostupnosti ulaznica i sadržaju konferencije? Ostavite nam svoju e-mail adresu.</p>
							<p>Zainteresirani ste predavati na WebCampu? Javite nam se na vrijeme i ostavite svoje kontakt podatke kako bismo vas obavijestili kad otvorimo poziv predavačima i predavačicama.</p>

						</div>

					</article>

				</div>
			</div>

		</div>
        <?php include 'components/sponsors.php'; ?>
        <?php include 'components/social.php'; ?>
        <?php include 'components/footer.php';?>

	</div>

	<script>
		new wczg.main();
	</script>

</body>
</html>
