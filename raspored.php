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
						<li><a href="novosti.html">Novosti</a></li>
						<li><a href="predavaci.html">Predavači</a></li>
						<li class="active"><a href="raspored.html">Raspored</a></li>
						<li><a href="info.html">Info</a></li>
					</ul>
				</nav>

			</div>

		</div>

	</header>

	<div id="content_wrap">

		<div class="lectures_block">
			<div class="inner_wrap">

				<h2>Raspored predavanja</h2>

				<strong class="mark h_a">Dvorana <b>A</b></strong>
				<strong class="mark h_b">Dvorana <b>B</b></strong>

				<ul>
					<li>
						<article>
							<time>09:00</time>
							<p>Akreditacije i druženje</p>
						</article>
					</li>
					<li>
						<article>
							<time>09:30</time>
							<p>Otvaranje konferencije</p>
						</article>
					</li>
					<li>
						<article>
							<time>10:00</time>
							<div class="hall_a">
								<strong class="hall">Dvorana <b>A</b></strong>
								<p>
									<a href="#">
										Gradimo za ljude
										<strong>Marko Dugonjić</strong>
									</a>
								</p>
							</div>
							<div class="hall_b">
								<strong class="hall">Dvorana <b>B</b></strong>
								<p>
									<a href="#">
										Apache Solr – zašto i kako ga koristiti
										<strong>Josip Maslać</strong>
									</a>
								</p>
							</div>
						</article>
					</li>
					<li>
						<article>
							<time>10:00</time>
							<div class="hall_a">
								<strong class="hall">Dvorana <b>A</b></strong>
								<p>
									<a href="#">
										Gradimo za ljude
										<strong>Marko Dugonjić</strong>
									</a>
								</p>
							</div>
							<div class="hall_b">
								<strong class="hall">Dvorana <b>B</b></strong>
								<p>
									<a href="#">
										Apache Solr – zašto i kako ga koristiti
										<strong>Josip Maslać</strong>
									</a>
								</p>
							</div>
						</article>
					</li>
					<li>
						<article>
							<time>10:00</time>
							<div class="hall_a">
								<strong class="hall">Dvorana <b>A</b></strong>
								<p>
									<a href="#">
										Gradimo za ljude
										<strong>Marko Dugonjić</strong>
									</a>
								</p>
							</div>
							<div class="hall_b">
								<strong class="hall">Dvorana <b>B</b></strong>
								<p>
									<a href="#">
										Apache Solr – zašto i kako ga koristiti
										<strong>Josip Maslać</strong>
									</a>
								</p>
							</div>
						</article>
					</li>
					<li>
						<article>
							<time>10:00</time>
							<div class="hall_a">
								<strong class="hall">Dvorana <b>A</b></strong>
								<p>
									<a href="#">
										Gradimo za ljude
										<strong>Marko Dugonjić</strong>
									</a>
								</p>
							</div>
							<div class="hall_b">
								<strong class="hall">Dvorana <b>B</b></strong>
								<p>
									<a href="#">
										Apache Solr – zašto i kako ga koristiti
										<strong>Josip Maslać</strong>
									</a>
								</p>
							</div>
						</article>
					</li>
					<li>
						<article>
							<time>10:00</time>
							<div class="hall_a">
								<strong class="hall">Dvorana <b>A</b></strong>
								<p>
									<a href="#">
										Gradimo za ljude
										<strong>Marko Dugonjić</strong>
									</a>
								</p>
							</div>
							<div class="hall_b">
								<strong class="hall">Dvorana <b>B</b></strong>
								<p>
									<a href="#">
										Apache Solr – zašto i kako ga koristiti
										<strong>Josip Maslać</strong>
									</a>
								</p>
							</div>
						</article>
					</li>
				</ul>


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
